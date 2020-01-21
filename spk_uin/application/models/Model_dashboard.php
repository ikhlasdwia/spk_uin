<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
		{
			parent::__construct();
			$this->load->library('template');
			$this->load->model('Model_dashboard');
			$this->load->helper('ulr');
		}

	public function index()
	{
		$this->template->load('template/main','dashboard/dashboard');
	}
}
