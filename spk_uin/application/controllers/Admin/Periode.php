<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Periode extends CI_Controller{  //pertamakali di jalankan, mengaktifkan model

    function __construct(){
      parent::__construct();     
      $this->load->model('Model_periode');
      $this->load->database('periode');
        $this->load->helper('url');
    }

    public function index()
    {
      $data['periode'] = $this->Model_periode->tampil_periode();
      $this->template->load('template/main','periode/periode',$data);
    }

    function tambah_periode()
    {
      $this->template->load('template/main','periode/tambah_periode');
    }

    function aksi_tambah_periode()
    {
        $data = array(
        'id_periode'  => $this->input->post('id_periode'),
        'nama_periode' => $this->input->post('nama_periode')
        );
        $this->Model_periode->save('tb_periode',$data);
        redirect(base_url().'Admin/Periode');
    }

    public function detail_periode($id_periode)
    {   
        $data['periode'] = $this->Model_periode->tampil_detail_periode($id_periode)->row_array();
        $this->template->load('template/main','periode/detail_periode', $data);
    }

    function edit_periode($id_periode)
    {
      $data['periode'] = $this->Model_periode->tampil_edit_periode($id_periode)->row_array();
      $this->template->load('template/main','periode/edit_periode',$data);
    }

    function aksi_edit_periode()
    {
      $data = array(
        'id_periode'  => $this->input->post('id_periode'),
        'nama_periode' => $this->input->post('nama_periode')
        );
        $id=$this->input->post('id_periode');
        $this->Model_periode->save_update('tb_periode',$id,$data);
        redirect('admin/periode');
    }

    function tampil_periode()
    {
        $periode=$this->Model_periode->tampil_periode();
      $data['periode']=$periode;
      $this->template->load('template/main','periode/periode',$data);
    }

    function hapus_periode($id_periode)
    {
      $this->Model_periode->hapus_periode('tb_periode',$id_periode);  
      redirect('admin/periode');
    }
  }