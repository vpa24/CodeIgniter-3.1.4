<?php
class User_model extends CI_Model
{
    public function Dang_nhap($email, $password)
    {
      $query=$this->db->query("SELECT * from khach_hang where email='$email' and mat_khau='$password'");
      return $query->row();
    }
    public function Dang_ki($ten_kh,$phai,$dia_chi,$dien_thoai,$email,$mat_khau)
    {
      $data = array('ma_kh' => NULL,'ten_kh' => $ten_kh,'phai' => $phai,'dia_chi' => $dia_chi,
                    'dien_thoai' => $dien_thoai,'email'=>$email,'mat_khau'=>$mat_khau);
      return $this->db->insert('khach_hang', $data);
    }
    public function Doc_khach_hang_theo_ma_kh($ma_kh)
    {
      $query=$this->db->query("SELECT * from khach_hang where ma_kh=$ma_kh");
        return $query->row();
    }
    public function Sua_khach_hang($ten_kh,$dia_chi,$dien_thoai,$ma_kh)
  	{
      $data = array(
        'ten_kh' => $ten_kh,
        'dia_chi' => $dia_chi,
        'dien_thoai' => $dien_thoai
      );
      $this->db->where('ma_kh', $ma_kh);
  		return $this->db->update('khach_hang', $data);
  	}
    public function themHoaDon($ma_kh,$ngay_dat,$hinh_thuc_thanh_toan,$tinh_trang,$tong_tien) {
      $data = array('ma_don_hang'=>NULL,'ma_kh' => $ma_kh,'ngay_dat' => $ngay_dat,'hinh_thuc_thanh_toan' => $hinh_thuc_thanh_toan,
                    'tinh_trang' => $tinh_trang,'tong_tien' => $tong_tien);
      $result= $this->db->insert('don_hang', $data);
      if($result)
          return $this->db->insert_id();
      else
          return false;
    }
    public function themChiTietHoaDon($ma_don_hang, $ma_sp, $so_luong, $don_gia) {
      $data = array('ma_don_hang' => $ma_don_hang,'ma_sp' => $ma_sp,'so_luong' => $so_luong,'don_gia' => $don_gia);
      return $this->db->insert('chi_tiet_don_hang', $data);
    }
    public function Thong_tin_don_hang($ma_kh){
      $query=$this->db->query("SELECT * from sieu_thi.don_hang where ma_kh=$ma_kh");
      return $query->result();
    }
    public function chi_tiet_don_hang($ma_don_hang)
    {
      $query=$this->db->query("SELECT ct.*,ten_sp,hinh from chi_tiet_don_hang ct,san_pham m where ct.ma_sp=m.ma_sp and ma_don_hang=$ma_don_hang");
      return $query->result();
    }
}
?>
