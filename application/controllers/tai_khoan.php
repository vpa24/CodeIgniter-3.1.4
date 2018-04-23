<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tai_khoan extends CI_Controller
{
    public function login()
    {
         $btn=$this->input->post("btnlogin");
         if(isset($btn)){
           $email    = $this->input->post('email');
           $password = md5($this->input->post('mat_khau'));
           $kq=$this->user_model->Dang_nhap($email,$password);
           if($kq)
           {
             $newdata = array('ten_kh'=> "$kq->ten_kh",'ma_kh'=> "$kq->ma_kh");
             $this->session->set_userdata($newdata);
             if($this->session->has_userdata('tong'))
                redirect(base_url('cart/khach_hang'));
            else
              redirect(base_url());
     		  }
     		  else{
     				$data['error']= "Thông tin đăng nhập không hợp lệ";
     		  }
        }
           $data['title']="Đăng Nhập";
           $data['views']="v_login";
       		$this->load->view('../../include/layout',isset($data)?$data:NULL);
    }
    public function Logout(){
       $this->session->sess_destroy();
        redirect(base_url());
    }
    public function Dang_ki(){
      $this->load->model('user_model');
      $btnThem=$this->input->post('btnThem');
      if(isset($btnThem))
      {
        $ten_kh=$this->input->post('ten_kh');
        $phai=$this->input->post('phai');
        $dia_chi=$this->input->post('dia_chi');
        $dien_thoai=$this->input->post('dien_thoai');
        $email=$this->input->post('email');
        $mat_khau=md5($this->input->post('mat_khau'));
        $kq=$this->user_model->Dang_ki($ten_kh,$phai,$dia_chi,$dien_thoai,$email,$mat_khau);

        if($kq)
        {
          $kq=$this->user_model->Dang_nhap($email,$mat_khau);
          if($kq)
          {
            $newdata = array('ten_kh'=> "$kq->ten_kh",'ma_kh'=> "$kq->ma_kh");
            $this->session->set_userdata($newdata);
            if($this->session->has_userdata('tong'))
               redirect(base_url('cart/khach_hang'));
           else
             redirect(base_url());
         }
        }
        else
        {
          echo "<script>alert('Đăng kí không thành công')</script>";
        }

      }
      $data['title']="Đăng Kí";
      $data['views']="v_register";
     $this->load->view('../../include/layout',isset($data)?$data:NULL);
    }
}
?>
