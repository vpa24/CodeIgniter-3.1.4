<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class san_pham extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function hien_thi_ma_loai()
	{
		$data['title']="Sản Phẩm Theo Mã Loại | Home :: w3layouts";

		$ma_loai= $this->uri->segment(3);
    $config['use_page_numbers'] = TRUE;
    $config['base_url'] = base_url()."san_pham/hien_thi_ma_loai/$ma_loai";
    $config['total_rows'] =count($this->m_san_pham->san_pham_theo_ma_loai($ma_loai));
    $config['per_page'] = 8;
		if(($this->uri->segment(4)=='chon0')||($this->uri->segment(4)=='chon1') || ($this->uri->segment(4)=='chon2') ||
				($this->uri->segment(4)=='chon3') || ($this->uri->segment(4)=='chon4'))
				{
					$chon=$data['chon']=$this->uri->segment(4);
					$config['base_url'] =  base_url()."san_pham/hien_thi_ma_loai/$ma_loai/$chon";
						if($data['chon']=='chon0')
							$data['chon']="";
						elseif($data['chon']=='chon1')
								$data['chon']="order by don_gia_khuyen_mai asc";
						elseif ($data['chon']=='chon2')
							$data['chon']="order by don_gia_khuyen_mai desc";
						elseif($data['chon']=='chon3')
								$data['chon']="order by don_gia - don_gia_khuyen_mai desc";
						elseif($data['chon']=='chon4')
								$data['chon']="order by ma_sp desc";
						$vt=( $this->uri->segment(5)?$this->uri->segment(5)-1:0)*$config['per_page'];
						$data['san_phams']=$this->m_san_pham->doc_san_pham_sap_xep_theo_ma_loai($ma_loai,$data['chon'],$vt,$config['per_page']);
						$config['uri_segment'] = 5;
				}
			else{
				$config['uri_segment'] = 4;
				$vt=( $this->uri->segment(4)?$this->uri->segment(4)-1:0)*$config['per_page'];
				$data['san_phams'] =$this->m_san_pham->san_pham_theo_ma_loai_phan_trang($ma_loai,$vt,$config['per_page']);
			}
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';

		$config['first_tag_open'] = '<li>';
		$config['last_tag_open'] = '<li>';

		$config['next_tag_open'] = '<li>';
		$config['prev_tag_open'] = '<li>';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$config['first_tag_close'] = '</li>';
		$config['last_tag_close'] = '</li>';

		$config['cur_tag_open'] = "<li class=\"active\"><span><b>";
		$config['cur_tag_close'] = "</b></span></li>";
    $this->pagination->initialize($config);

    $data['phan_trang']=$this->pagination->create_links();
		$data['views']="san_pham/v_san_pham_theo_ma_loai";
		$this->load->view('../../include/layout',isset($data)?$data:NULL);
	}
	public function chi_tiet()
	{
		$ma_sp= $this->uri->segment(3);

		$data['san_pham']=$this->m_san_pham->doc_chi_tiet_san_pham($ma_sp);
		$data['ma_loai']=$data['san_pham']->ma_loai;
		$data['san_phams']=$this->m_san_pham->doc_san_pham_cung_loai($data['ma_loai'],$ma_sp);
		$data['tong']=count($data['san_phams']);
		$data['title']=$data['san_pham']->ten_sp;
		$data['views']="san_pham/v_chi_tiet_san_pham";
		$this->load->view('../../include/layout',isset($data)?$data:NULL);
	}
	public function thuong_hieu()
	{
		$ma_thuong_hieu=$this->uri->segment(3);

		$config['use_page_numbers'] = TRUE;
    $config['base_url'] = base_url("san_pham/thuong_hieu/$ma_thuong_hieu");
    $config['total_rows'] =count($this->m_san_pham->Doc_san_pham_cung_thuong_hieu($ma_thuong_hieu));
    $config['per_page'] = 8;
		if(($this->uri->segment(4)=='chon0')||($this->uri->segment(4)=='chon1') || ($this->uri->segment(4)=='chon2') ||
				($this->uri->segment(4)=='chon3') || ($this->uri->segment(4)=='chon4'))
		{
			$chon=$data['chon']=$this->uri->segment(4);
			$config['base_url'] = base_url("san_pham/thuong_hieu/$ma_thuong_hieu/$chon");
			if($data['chon']=='chon0')
				$data['chon']="";
			elseif($data['chon']=='chon1')
					$data['chon']="order by don_gia_khuyen_mai asc";
			elseif ($data['chon']=='chon2')
				$data['chon']="order by don_gia_khuyen_mai desc";
			elseif($data['chon']=='chon3')
					$data['chon']="order by don_gia - don_gia_khuyen_mai desc";
			elseif($data['chon']=='chon4')
					$data['chon']="order by ma_sp desc";
			$vt=( $this->uri->segment(5)?$this->uri->segment(5)-1:0)*$config['per_page'];
			$data['san_phams']=$this->m_san_pham->Doc_san_pham_theo_thuong_hieu_sap_xep($ma_thuong_hieu,$data['chon'],$vt,$config['per_page']);
			$ten_thuong_hieu=$data['ten_thuong_hieu']=$data['san_phams'][0]->ten_thuong_hieu;
			$data['title']="$ten_thuong_hieu";
		}
		else{
			$config['uri_segment'] = 4;
			$vt=( $this->uri->segment(4)?$this->uri->segment(4)-1:0)*$config['per_page'];
			$data['san_phams'] =$this->m_san_pham->Doc_san_pham_cung_thuong_hieu_phan_trang($ma_thuong_hieu,$vt,$config['per_page']);
			$ten_thuong_hieu=$data['ten_thuong_hieu']=$data['san_phams'][0]->ten_thuong_hieu;
			$data['title']="$ten_thuong_hieu";
		}
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';

		$config['first_tag_open'] = '<li>';
		$config['last_tag_open'] = '<li>';

		$config['next_tag_open'] = '<li>';
		$config['prev_tag_open'] = '<li>';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$config['first_tag_close'] = '</li>';
		$config['last_tag_close'] = '</li>';

		$config['cur_tag_open'] = "<li class=\"active\"><span><b>";
		$config['cur_tag_close'] = "</b></span></li>";
    $this->pagination->initialize($config);

    $data['phan_trang']=$this->pagination->create_links();
		$data['views']="san_pham/v_san_pham_cung_thuong_hieu";
		$this->load->view('../../include/layout',isset($data)?$data:NULL);
	}
	public function tim_kiem_san_pham()
	{
			$data['gtTim']=$gtTim=$this->input->get('srch-term');

    $config['use_page_numbers'] = TRUE;
    $config['base_url'] = base_url()."san_pham/tim_kiem_san_pham?srch-term=$gtTim&btnTim=";
    $config['total_rows'] =count($this->m_san_pham->Tim_san_pham_theo_ten_sp($gtTim));
		$data['tong']=$config['total_rows'];
    $config['per_page'] = 8;
		$config['uri_segment'] = 3;
		$vt=($this->uri->segment(3)?$this->uri->segment(3)-1:0)*$config['per_page'];
		echo $this->uri->segment(3);
		$data['san_phams'] =$this->m_san_pham->Tim_san_pham_theo_ten_sp($gtTim,$vt,$config['per_page']);
		$data['title']="Kết quả tìm kiếm cho $gtTim";
		$tim=array('gtTim' => $gtTim);
		$this->session->set_userdata($tim);

		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';

		$config['first_tag_open'] = '<li>';
		$config['last_tag_open'] = '<li>';

		$config['next_tag_open'] = '<li>';
		$config['prev_tag_open'] = '<li>';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$config['first_tag_close'] = '</li>';
		$config['last_tag_close'] = '</li>';

		$config['cur_tag_open'] = "<li class=\"active\"><span><b>";
		$config['cur_tag_close'] = "</b></span></li>";
    $this->pagination->initialize($config);

    $data['phan_trang']=$this->pagination->create_links();
		$data['views']="san_pham/v_tim_kiem_sp";
		$this->load->view('../../include/layout',isset($data)?$data:NULL);

	}
	public function tim_kiem_san_pham_sap_xep()
	{
		$gtTim=$data['gtTim']=$this->session->userdata('gtTim');
		$config['use_page_numbers'] = TRUE;
		$data['chon']=$this->input->get('chon');
		 $config['total_rows'] =count($this->m_san_pham->Tim_san_pham_theo_ten_sp($gtTim));
		$data['tong']=$config['total_rows'];
    $config['per_page'] = 8;
		$vt=($this->input->get('per_page')?$this->input->get('per_page')-1:0)*$config['per_page'];
		$chon=$data['chon'];
			$config['base_url'] = "http://localhost/Codeigniter-3.1.4/index.php?c=san_pham&m=tim_kiem_san_pham_sap_xep&chon=$chon";
			if($data['chon']==0)
				$data['chon']="";
			elseif($data['chon']==1)
					$data['chon']="order by don_gia_khuyen_mai asc";
			elseif ($data['chon']==2)
				$data['chon']="order by don_gia_khuyen_mai desc";
			elseif($data['chon']==3)
					$data['chon']="order by don_gia - don_gia_khuyen_mai desc";
			elseif($data['chon']==4)
					$data['chon']="order by ma_sp desc";
			$data['san_phams']=$this->m_san_pham->Tim_kiem_san_pham_sap_xep($gtTim,$data['chon'],$vt,$config['per_page']);


		$data['title']="Kết quả tìm kiếm cho $gtTim";
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';

		$config['first_tag_open'] = '<li>';
		$config['last_tag_open'] = '<li>';

		$config['next_tag_open'] = '<li>';
		$config['prev_tag_open'] = '<li>';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$config['first_tag_close'] = '</li>';
		$config['last_tag_close'] = '</li>';

		$config['cur_tag_open'] = "<li class=\"active\"><span><b>";
		$config['cur_tag_close'] = "</b></span></li>";
    $this->pagination->initialize($config);

    $data['phan_trang']=$this->pagination->create_links();
		$data['views']="san_pham/v_tim_kiem_sp";
		$this->load->view('../../include/layout',isset($data)?$data:NULL);
	}
	function autocomplete(){

		if (isset($_GET['term'])){
			$q = strtolower($_GET['term']);
			$this->m_san_pham->autocomplete($q);
		}
	}
}
