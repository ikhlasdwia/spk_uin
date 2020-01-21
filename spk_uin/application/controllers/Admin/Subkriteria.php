<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Subkriteria extends CI_Controller{  //pertamakali di jalankan, mengaktifkan model

    function __construct(){
      parent::__construct();     
      $this->load->model('Model_subkriteria');
      $this->load->database('subkriteria');
        $this->load->helper('url');
    }

    public function index()
    {
      $data['subkriteria'] = $this->Model_subkriteria->tampil_subkriteria();
      $this->template->load('template/main','subkriteria/subkriteria',$data);
    }

    function tambah_subkriteria()
    {
      $this->template->load('template/main','subkriteria/tambah_subkriteria');
    }

    function aksi_tambah_subkriteria()
    {
        $id = $this->input->post('id_kriteria');

        $data = array(
        'id_subkriteria'  => $this->input->post('id_subkriteria'),
        'nama_subkriteria' => $this->input->post('nama_subkriteria'),
        'id_kriteria' => $this->input->post('id_kriteria'),
        'nilai'  => $this->input->post('nilai')
        );
        $this->Model_subkriteria->save('tb_subkriteria',$data);
        // redirect('admin/subkriteria/tampil_subkriteria_by_id/'.$id);
        redirect('admin/kriteria/tampil_kriteria/');
    }

    function edit_subkriteria($id_subkriteria)
    {
      $data['subkriteria'] = $this->Model_subkriteria->tampil_edit_subkriteria($id_subkriteria)->row_array();
      $this->template->load('template/main','subkriteria/edit_subkriteria',$data);
    }

    function aksi_edit_subkriteria()
    {
      $data = array(
        'id_subkriteria'  => $this->input->post('id_subkriteria'),
        'nama_subkriteria' => $this->input->post('nama_subkriteria'),
        'id_kriteria' => $this->input->post('id_kriteria'),
        'nilai'  => $this->input->post('nilai')
        );
        $id=$this->input->post('id_subkriteria');
        $this->Model_subkriteria->save_update('tb_subkriteria',$id,$data);
        redirect('admin/kriteria');
    }

    function tampil_subkriteria()
    {
        $subkriteria=$this->Model_subkriteria->tampil_subkriteria();
      $data['subkriteria']=$subkriteria;
      $this->template->load('template/main','subkriteria/subkriteria',$data);
    }

    function hapus_subkriteria($id_subkriteria)
    {
      $this->Model_subkriteria->hapus_subkriteria('tb_subkriteria',$id_subkriteria);  
      redirect('admin/subkriteria');
    }

    function parameter($id_kriteria)
    {
        $data['record']=$this->Model_subkriteria->get_by_id($id_kriteria); 
        $data['record1']=$this->Model_subkriteria->get_by_id1($id_kriteria); 
      $this->template->load('template/main','subkriteria/subkriteria_parameter',$data);
    }

    function tampil_subkriteria_by_id($id)
    {
        $where = array('id_kriteria' => $id);
        $data['record']=$this->Model_subkriteria->tampil_subkriteria_by_id($id)->result();

        $this->template->load('template/main','subkriteria/subkriteria_parameter',$data);
    }
  }