<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	public function index()
	{
		$data['views']="v_home";
		$data['title']="Super Market | Home :: w3layouts";
		$thang=date('m');
		$data['thangs'] = $this->m_san_pham->ban_chay($thang);
		$data['giam'] = $this->m_san_pham->giam_gia();
		$data['thuong_hieus'] = $this->m_thuong_hieu->hang_dau();
		$data['san_pham_mois'] = $this->m_san_pham->moi();

		$this->load->view('../../include/layout',isset($data)?$data:NULL);
	}

}
