<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tim_sp extends CI_Controller{

function index()
{
  $this->load->view('index');

}
  function autocomplete()
  {
    $this->load->model('m_san_pham','',true);
    if(isset($_GET['term'])){
      $q=strtolower($_GET['term']);
      $output=$this->m_san_pham->tim_kiem_san_pham($q);
    $this->output->set_content_type('application/json')->set_output(json_encode($output));

    }
  }
}

 ?>
