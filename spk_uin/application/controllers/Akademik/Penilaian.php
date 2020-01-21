<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Penilaian extends CI_Controller{  

    function __construct(){
      parent::__construct();     
      $this->load->model('Model_penilaian');
      $this->load->model('Model_mahasiswa');
      $this->load->model('Model_kriteria');
      $this->load->database('penilaian');
        $this->load->helper('url');
    }

    public function index()
    {
      $data['penilaian'] = $this->Model_penilaian->tampil_penilaian1();
      $this->template->load('template/main_akademik','penilaian/penilaian', $data);
    }

    function tampil_penilaian()
    {
      $this->template->load('template/main_akademik','penilaian/tampil_penilaian');
    }

    function tampil_mhs()
    {
       $nim=$this->input->post('kode');
       $data=$this->Model_mahasiswa->tampil_detail_mhs($nim);
       echo json_encode($data);
    }

    function tambah_penilaian()
    {
      $data['nilai_mhs']=$this->Model_penilaian->tampil_penilaian();
        $data['id_mhs']=$this->Model_mahasiswa->tampil_mahasiswa();
        $data["kriteria"]=$this->Model_kriteria->tampil_kriteria();
        $this->template->load('template/main_akademik','penilaian/tambah_penilaian', $data);
    }

    function aksi_tambah_penilaian()
    {
      $hasil=0;
      //simpan penilaian mhs
      $data = array(
        
        'id_mhs'  => $this->input->post('id_m'),
        'nim'  => $this->input->post('nim'),
        'nama_mhs' => $this->input->post('nama_mhs'),
        'id_fak' => $this->input->post('idFak'),
        'id_jur' => $this->input->post('idJur'),
        
        );
       $this->Model_penilaian->save('tb_penilaian',$data);
      //simpan ke tb_penilaian mhs
      $id_penilaian=$this->Model_penilaian->get_where('tb_penilaian',$data);
          foreach ($id_penilaian as $id =>$idp ) {
           
            $id_pen=$idp->id_penilaian;
           
          }
       $kriteria=$this->input->post('kriteria');

          foreach ($kriteria as $k => $v) {
             $d= array(
                'id_penilaian' => $id_pen,
                'id_kriteria' => $k,
                'id_nilai' => $v
            );
             //hitung hasil $k=id_kriteria $v= id_subkriteria
             
             $hasil+=$this->hitungHasil($k,$v);
            $this->Model_penilaian->save('tb_penilaian_mhs',$d);
          }
        //update hasil penilaian
          $where=array(
            'id_penilaian'=>$id_pen,            
          );
          $data = array(
            'total'=>$hasil
          );

          $this->Model_penilaian->update_where("tb_penilaian",$where,$data);


        redirect(base_url().'Akademik/Penilaian');
    }

    function edit_penilaian($id_penilaian)
    {
      $data['penilaian'] = $this->Model_penilaian->tampil_penilaian2($id_penilaian)->row_array();
      $data["kriteria"]=$this->Model_kriteria->tampil_kriteria();
      $data["nilai"] = $this->Model_penilaian->tampil_penilaian3($id_penilaian)->row_array();
      $this->template->load('template/main_akademik','penilaian/edit_penilaian',$data);
    }

    function aksi_edit_penilaian()
    {
     $data = array(
        'id_penilaian' => $this->input->post('id_penilaian'),
        'id_mhs'  => $this->input->post('id_m'),
        'nim'  => $this->input->post('nim'),
        'nama_mhs' => $this->input->post('nama_mhs'),
        'id_fak' => $this->input->post('fak'),
        'id_jur' => $this->input->post('jur')
        );  
        $this->Model_penilaian->save('tb_penilaian',$data);
          $id_penilaian=$this->Model_penilaian->get_where('tb_penilaian',$data);
          foreach ($id_penilaian as $id =>$idp ) {
            print_r($id);
            echo "<br>";
            print_r($idp);
            echo "<br>";

            $id_pen=$idp->id_penilaian;
            echo $id_pen;
          }
        $kriteria=$this->input->post('kriteria');
          foreach ($kriteria as $k => $v) {
             $d= array(
                'id_penilaian' => $id_pen,
                'id_kriteria' => $k,
                'id_nilai' => $v
            );
            $this->Model_penilaian->save_update('tb_penilaian_mhs',$id,$data);
          }
        // $id=$this->input->post('id_penilaian');
        // $this->Model_penilaian->save_update('tb_penilaian',$id,$data);
        redirect('akademik/penilaian');
    }

    function hapus_penilaian($id_penilaian)
    {
      $where = array (
        'id_penilaian'=>$id_penilaian
      );
      $where1 = array (
        'id_penilaian'=>$id_penilaian
      );
      echo $id_penilaian;
      $this->Model_penilaian->hapus_penilaian('tb_penilaian',$where);  
      $this->Model_penilaian->hapus_penilaian('tb_penilaian_mhs',$where1);  
      redirect('akademik/penilaian');
    }

    function get_jurusan(){
        $id=$this->input->post('id');
        $data=$this->Model_penilaian->get_jurusan($id);
        echo json_encode($data);
    }

    function hitung()
    {
      $data['fakultas']=$this->Model_penilaian->get("fakultas");
      $this->template->load('template/main_akademik','penilaian/hitung',$data);
    }

    function hitungHasil($id_kriteria,$id_subkriteria)
    {
        $where=array(
          'id_kriteria'=>$id_kriteria
        );
        $kriteria = $this->Model_penilaian->get_where('tb_kriteria',$where);
        foreach ($kriteria as $k => $v) {
          $nilai_kriteria=$v->kriteria_eigen;
        }

        $whereSub=array(
          'id_subkriteria'=>$id_subkriteria
        );
        $subkriteria = $this->Model_penilaian->get_where('tb_subkriteria',$whereSub);
        foreach ($subkriteria as $k => $v) {
          $nilai_subkriteria=$v->subkriteria_eigen;
        }
        return $nilai_kriteria*$nilai_subkriteria;
    }

    //mengambil data hasil penilaian per fakultas
    function get_hasil(){
        $id=$this->input->post('id_fak');
        $where = array(
          'id_fak'=>$id
        );
        $data=$this->Model_penilaian->get_order("v_hasil",$where);
        echo json_encode($data);
    }
}