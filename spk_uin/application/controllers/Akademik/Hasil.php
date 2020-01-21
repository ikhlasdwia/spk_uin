<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Penilaian extends CI_Controller{  

    function __construct(){
      parent::__construct();     
      $this->load->model('Model_penilaian');
      $this->load->database('penilaian');
        $this->load->helper('url');
    }

    public function index()
    {
      $data['penilaian'] = $this->Model_penilaian->tampil_penilaian();
      $this->template->load('template/main_akademik','penilaian/penilaian', $data);
    }

    function tampil_penilaian()
    {
      $this->template->load('template/main_akademik','penilaian/tampil_penilaian');
    }

    function tambah_penilaian()
    {
        $this->template->load('template/main_akademik','penilaian/tambah_penilaian');
    }

    function aksi_tambah_penilaian()
    {
        $data = array(
        'id_penilaian'  => $this->input->post('id_penilaian'),
        'id_mhs'  => $this->input->post('id_mhs'),
        'nim'  => $this->input->post('nim'),
        'nama_mhs' => $this->input->post('nama_mhs'),
        'id_fak' => $this->input->post('fak'),
        'id_jur' => $this->input->post('jur'),
        'status' => $this->input->post('status')
        );
        $this->Model_penilaian->save('tambah_penilaian',$data);
        redirect(base_url().'Akademik/Penilaian');
    }

    function edit_penilaian($id_penilaian)
    {
      $data['penilaian'] = $this->Model_penilaian->tampil_edit_penilaian($id_penilaian
      )->row_array();
      $this->template->load('template/main_akademik','penilaian/edit_penilaian',$data);
    }

    function aksi_edit_penilaian()
    {
     $data = array(
        'id_penilaian' => $this->input->post('id_penilaian'),
        'id_mhs'  => $this->input->post('id_mhs'),
        'nim'  => $this->input->post('nim'),
        'nama_mhs' => $this->input->post('nama_mhs'),
        'id_fak' => $this->input->post('fak'),
        'id_jur' => $this->input->post('jur'),
        'status' => $this->input->post('status')
        );
        $id=$this->input->post('id_penilaian');
        $this->Model_penilaian->save_update('tb_penilaian',$id,$data);
        redirect('penilaian/penilaian');
    }

    function hapus_penilaian($id_penilaian)
    {
      $this->Model_penilaian->hapus_penilaian('tb_penilaian',$id_penilaian);  
      redirect('penilaian/penilaian');
    }

    function get_jurusan(){
        $id=$this->input->post('id');
        $data=$this->Model_penilaian->get_jurusan($id);
        echo json_encode($data);
    }
  }