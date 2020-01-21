<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
		{
			parent::__construct();
			$this->load->library('template');
			$this->load->model('Model_kriteria');
			$this->load->model('Model_subkriteria');
			$this->load->model('Model_periode');
			$this->load->helper('url');
		}

	public function index()
	{
		$data['kriteria']=$this->Model_periode->get_numrow("tb_kriteria");
		$data['subkriteria']=$this->Model_periode->get_numrow("tb_subkriteria");
		$data['periode']=$this->Model_periode->get_numrow("tb_periode");
		$this->template->load('template/main','dashboard/dashboard',$data);
	}
}
