<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Mahasiswa extends CI_Controller{  

    function __construct(){
      parent::__construct();     
      $this->load->model('Model_mahasiswa');
      $this->load->database('mahasiswa');
        $this->load->helper('url');
    }

    public function index()
    {
      $data['mahasiswa'] = $this->Model_mahasiswa->tampil_mahasiswa1();
      $this->template->load('template/main_akademik','mahasiswa/mahasiswa', $data);
    }

    function tampil_mahasiswa()
    {
      $this->template->load('template/main_akademik','mahasiswa/tampil_mahasiswa1');
    }

    function tambah_mahasiswa()
    {
      $this->template->load('template/main_akademik','mahasiswa/tambah_mahasiswa');
    }

    function aksi_tambah_mahasiswa()
    {
        $data = array(
        'id_mhs'  => $this->input->post('id_mhs'),
        'nim'  => $this->input->post('nim'),
        'nama_mhs' => $this->input->post('nama_mhs'),
        'id_fak' => $this->input->post('fak'),
        'id_jur' => $this->input->post('jur'),
        'jk' => $this->input->post('jk'),
        'tempat_lahir' => $this->input->post('tempat_lahir'),
        'tgl_lahir' => $this->input->post('tgl_lahir'),
        'alamat' => $this->input->post('alamat'),
        'tgl_terdaftar'  => $this->input->post('tgl_terdaftar')
        );
        $this->Model_mahasiswa->save('tb_mhs',$data);
        redirect('akademik/mahasiswa');
    }

    
    function edit_mahasiswa($id_mhs)
    {
      $data['mahasiswa'] = $this->Model_mahasiswa->tampil_edit_mahasiswa($id_mhs)->row_array();
      $this->template->load('template/main_akademik','mahasiswa/edit_mahasiswa',$data);
    }

    function aksi_edit_mahasiswa()
    {
     $data = array(
        'id_mhs'  => $this->input->post('id_mhs'),
        'nim'  => $this->input->post('nim'),
        'nama_mhs' => $this->input->post('nama_mhs'),
        'id_fak' => $this->input->post('fak'),
        'id_jur' => $this->input->post('jur'),
        'jk' => $this->input->post('jk'),
        'tempat_lahir' => $this->input->post('tempat_lahir'),
        'tgl_lahir' => $this->input->post('tgl_lahir'),
        'alamat' => $this->input->post('alamat'),
        'tgl_terdaftar'  => $this->input->post('tgl_terdaftar')
        );
        $id=$this->input->post('id_mhs');
        $this->Model_mahasiswa->save_update('tb_mhs',$id,$data);
        redirect('akademik/mahasiswa');
    }

    function hapus_mahasiswa($id_mhs)
    {
      $this->Model_mahasiswa->hapus_mahasiswa('tb_mhs',$id_mhs);  
      redirect('akademik/mahasiswa');
    }

    function get_jurusan(){
        $id=$this->input->post('id');
        $data=$this->Model_mahasiswa->get_jurusan($id);
        echo json_encode($data);
    }

    function detail_mahasiswa($id_mhs)
    {   
        $data['mahasiswa'] = $this->Model_mahasiswa->tampil_detail_mahasiswa($id_mhs)->row_array();
        $this->template->load('template/main_akademik','mahasiswa/detail_mahasiswa', $data);
    }
  }