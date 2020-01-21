<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Beranda extends CI_Controller
{
	private $aData = array();
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library('parser');
		$this->load->model('M_data');
		$this->aData = array(
			'surl'=>site_url(),
			'user'  => $this->M_data->count_all('tb_user'),
			'dosen'  => $this->M_data->count_all('tb_dosen'),
			'pembimbing'  => $this->M_data->count_all('tb_dosen'),
			'penguji'  => $this->M_data->count_all('tb_penguji'),
			'mahasiswa'  => $this->M_data->count_all('tb_mahasiswa'),
			'alumni'  => $this->M_data->count_all('tb_alumni'),
			);
		if(!$this->session->userdata('kategori')){
			redirect('index.php/Login');
		}

	}

	function index(){
		$this->parser->parse('view_header',$this->aData);
		$this->parser->parse('Beranda/view_beranda',$this->aData); 
		$this->parser->parse('view_footer',$this->aData);  
	}
}