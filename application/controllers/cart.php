<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
  public function add(){
    $ma_sp=$this->uri->segment(3);
    $sl=$this->uri->segment(4);
    $product=$this->m_san_pham->doc_chi_tiet_san_pham($ma_sp);
    $data = array(
        'id'      => $product->ma_sp,
        'qty'     => $sl,
        'price'   => $product->don_gia_khuyen_mai,
        'name'    => $product->ten_sp,
        'image_link'=>$product->hinh
      );
    $this->cart->insert($data);
    redirect(base_url('cart/giohang'));
  }
  public function giohang(){
    $data['title']="Giỏ Hàng Của Bạn";
    $data['carts']=$this->cart->contents();
    $tong=$this->cart->total_items();
    $tongsp=array('tong' => $tong);
    $this->session->set_userdata($tongsp);
    $data['views']="cart/v_cart";
		$this->load->view('../../include/layout',isset($data)?$data:NULL);

  }
  public function update(){
    $tongsp=$this->cart->contents();
    foreach($tongsp as $key=>$row)
    {
      $tong=$this->input->post('qty_'.$row['id']);
      $data=array();
      $data['rowid']=$key;
      $data['qty']=$tong;
      $this->cart->update($data);
    }
      redirect(base_url('cart/giohang'));
  }
public function del(){
 $ma_sp=$this->uri->segment(3);
  //xoa 1 san pham khi co tuyen tham so la ma san pham
  $tongsp=$this->cart->contents();
    //duyet tat ca cac san  pham trong gio hang
    foreach($tongsp as $key=>$row)
    {
      if($row['id']==$ma_sp)
      {
        $data=array();
        $data['rowid']=$key;
        $data['qty']=0;
        $this->cart->update($data);
      }
    }
    redirect(base_url('cart/giohang'));
}
      public function khach_hang(){
        $ma_kh= $this->session->userdata('ma_kh');
        $data['kh']=$this->user_model->Doc_khach_hang_theo_ma_kh($ma_kh);
        $data['title']="Thông tin khách hàng";
        $btnDiaChi=$this->input->post('btnDiaChi');
        if(isset($btnDiaChi))
        {
          $ten_kh=$this->input->post('ten_kh');
          $dia_chi=$this->input->post('dia_chi');
          $dien_thoai=$this->input->post('dien_thoai');
          $kh=$this->user_model->Sua_khach_hang($ten_kh,$dia_chi,$dien_thoai,$ma_kh);
          $ngay_dat = date('Y-m-d');
          $hinh_thuc_thanh_toan=$this->input->post('thanh_toan');
          $tinh_trang=1;
          $tong_tien=$this->session->userdata('tongtt');
          $hoa_don=$this->user_model->themHoaDon($ma_kh,$ngay_dat,$hinh_thuc_thanh_toan,$tinh_trang,$tong_tien);
          $hoadon = array('hoa_don'=> $hoa_don);
         $this->session->set_userdata($hoadon);
                redirect(base_url('cart/in_don_hang'));
      }
        $data['views']="cart/v_thong_tin_khach_hang";
        $this->load->view('../../include/layout',isset($data)?$data:NULL);
      }
      public function in_don_hang()
      {
        if($this->session->userdata('hoa_don')>0) // Thêm vào Chi tiết hóa đơn
        {

            $hoa_don=$this->session->userdata('hoa_don');
              $giohang=$this->cart->contents();
            foreach($giohang as $key=>$row)
            {
                    $this->user_model->themChiTietHoaDon($hoa_don,$row['id'],$row['qty'],$row['price']);
            }
        }
      $this->session->unset_userdata('tong');
      $this->cart->destroy();
      $data['title']="Đặt hàng thành công";
      $data['views']="cart/v_in_don_hang.php";
      $this->load->view('../../include/layout',isset($data)?$data:NULL);
      }
      public function thong_tin_don_hang()
      {
        $ma_kh=$this->session->userdata('ma_kh');
        $data['don_hangs']=$this->user_model->Thong_tin_don_hang($ma_kh);
        $data['tong']=count($data['don_hangs']);
        $data['title']="Thông tin đơn hàng";
        $data['views']="cart/v_don_hang.php";
        $this->load->view('../../include/layout',isset($data)?$data:NULL);
      }
      function chi_tiet_don_hang()
      {
        $data['ma_don_hang']=$this->uri->segment(3);
        $data['chi_tiet']=$this->user_model->chi_tiet_don_hang($data['ma_don_hang']);
        $data['title']="Chi tiết đơn hàng";
        $data['views']="cart/v_chi_tiet_don_hang.php";
        $this->load->view('../../include/layout',isset($data)?$data:NULL);

      }

}
