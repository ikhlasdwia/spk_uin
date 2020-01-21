<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Kriteria extends CI_Controller{  //pertamakali di jalankan, mengaktifkan model

    function __construct(){
      parent::__construct();     
      $this->load->model('Model_kriteria');
      $this->load->database('kriteria');
        $this->load->helper('url');
    }

    public function index()
    {
      $data['kriteria'] = $this->Model_kriteria->tampil_kriteria();
      $this->template->load('template/main','kriteria/kriteria',$data);
    }

    function tambah_kriteria()
    {
      $this->template->load('template/main','kriteria/tambah_kriteria');
    }

    function aksi_tambah_kriteria()
    {
        $data = array(
        'id_kriteria'  => $this->input->post('id_kriteria'),
        'nama_kriteria' => $this->input->post('nama_kriteria')
        );
        $this->Model_kriteria->save('tb_kriteria',$data);
        redirect(base_url().'Admin/Kriteria');
    }

    function edit_kriteria($id_kriteria)
    {
      $data['kriteria'] = $this->Model_kriteria->tampil_edit_kriteria($id_kriteria)->row_array();
      $this->template->load('template/main','kriteria/edit_kriteria',$data);
    }

    function aksi_edit_kriteria()
    {
      $id=$this->input->post('id_kriteria');
      $nama=$this->input->post('nama_kriteria');

      $data = array(
        'id_kriteria'  => $id,
        'nama_kriteria' => $nama
        );
        
      $this->Model_kriteria->save_update('tb_kriteria', $id, $data);
      redirect('admin/kriteria');
    }

    function tampil_kriteria()
    {
      $kriteria=$this->Model_kriteria->tampil_kriteria();
      $data['kriteria']=$kriteria;
      $this->template->load('template/main','kriteria/kriteria',$data);
    }

    function hapus_kriteria($id_kriteria)
    {
      $this->Model_kriteria->hapus_kriteria('tb_kriteria',$id_kriteria);  
      redirect('admin/kriteria');
    }
  }