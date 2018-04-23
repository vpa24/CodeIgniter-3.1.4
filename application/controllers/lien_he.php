<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class lien_he extends CI_Controller {
  public function Hien_thi()
  {
    $th_gui=$this->input->post('th_gui');
    if(isset($th_gui))
			{
        $ci = get_instance();
  $config['protocol'] = "smtp";
  $config['smtp_host'] = "ssl://smtp.gmail.com";
  $config['smtp_port'] = "465";
  $config['smtp_user'] = "vuphuonganh020497@gmail.com";
  $config['smtp_pass'] = "Chosoichu0204";
  $config['charset'] = "utf-8";
  $config['mailtype'] = "html";
  $config['newline'] = "\r\n";

  $ci->email->initialize($config);

      $email= $this->input->post('th_email');
      $chu_de=$this->input->post('th_chude');
      $noidung=$this->input->post('th_noidung');
      $this->email->from('vuphuonganh020497@gmail.com', 'Anh Vu');
      $this->email->to("$email");
      $this->email->subject("$chu_de");
      $this->email->message("$noidung");
      $this->email->send();
      if(! $this->email->send())
			  echo "<script>alert('Gửi mail thành công');</script>";
		  else
         echo "<script>alert('Mail lỗi');</script>";

    }
		$data['title']="Liên Hệ";
    $data['views']="v_lien_he.php";
    $this->load->view('../../include/layout',isset($data)?$data:NULL);
  }
}

?>
