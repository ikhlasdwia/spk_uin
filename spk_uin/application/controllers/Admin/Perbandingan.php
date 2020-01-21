<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Perbandingan extends CI_Controller{  //pertamakali di jalankan, mengaktifkan model

    function __construct(){
     parent::__construct();     
     $this->load->model('Model_kriteria');
     $this->load->database('kriteria');
     $this->load->library('M_db');
     $this->load->helper('url');
    }

    public function index()
    {
        $output=array();
      $dKriteria=$this->Model_kriteria->kriteria_data('tb_kriteria');
      $nilai=$this->Model_kriteria->kriteria_nilai('tb_kriteria_nilai');
      foreach($nilai as $n)
    {
      $Knilai[$n->kriteria_id_dari][$n->kriteria_id_tujuan]=$n->nilai;
   
    }   
      foreach($dKriteria as $rK)
    {
      $output[$rK->id_kriteria]=$rK->nama_kriteria;
   
    }   
      $d['arr']=$output;
      $d['nilai']=$Knilai;
   
      $this->template->load('template/main','perbandingan/perbandingan_list',$d);
    }

    
    function updateutama()
      {
        $error=FALSE;
        $msg="";
        $s=array(
        'id_kriteria_nilai !='=>''
        );
        $this->m_db->delete_row('tb_kriteria_nilai',$s);
              
        $cr=$this->input->post('crvalue');
     
        foreach($_POST as $k=>$v)
        {
          if($k!="crvalue" )
          {                 
          foreach($v as $x=>$x2)
          {
            $d=array(
            'kriteria_id_dari'=>$k,
            'kriteria_id_tujuan'=>$x,
            'nilai'=>$x2,
            );
            $this->m_db->add_row('tb_kriteria_nilai',$d);
            }
          }
        $msg="Berhasil update nilai kriteria";
        $error=FALSE;
      }
            
        
        if($error==FALSE)
        {     
        echo json_encode(array('status'=>'ok','msg'=>$msg));
      }else{
        echo json_encode(array('status'=>'no','msg'=>$msg));
      }
      
    }

    function kriteria_eigen()
    {
        
        $prio=$this->input->post('pri-b');
        if(!empty($prio))
        {
        foreach($prio as $rk=>$rv)
        {
          $s=array(
          'id_kriteria'=>$rk,
          );
          if($this->m_db->is_bof('tb_kriteria',$s)==TRUE)
          {
            $d=array(
            'id_kriteria'=>$rk,
            'kriteria_eigen'=>$rv,
            );
            $this->m_db->add_row('tb_kriteria',$d);
          }else{
            $d=array(         
            'kriteria_eigen'=>$rv,
            );
            $this->m_db->edit_row('tb_kriteria',$d,$s);
          }
        }
        echo json_encode('ok');
      }else{
        echo json_encode('no');
      }
    }
  }