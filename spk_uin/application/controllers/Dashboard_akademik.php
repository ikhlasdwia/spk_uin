<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_akademik extends CI_Controller {

	function __construct()
		{
			parent::__construct();
			$this->load->library('template');
			$this->load->model('Model_periode');
		}


	public function index()
	{
		$data['mahasiswa']=$this->Model_periode->get_numrow("tb_mhs");
		$data['penilaian']=$this->Model_periode->get_numrow("tb_penilaian");
		$data['periode']=$this->Model_periode->get_numrow("tb_periode");
		$this->template->load('template/main_akademik','dashboard/dashboard_akademik',$data);
	}
}
