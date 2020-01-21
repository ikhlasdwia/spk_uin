<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Perbandingan_sub extends CI_Controller{  //pertamakali di jalankan, mengaktifkan model

    function __construct(){
     parent::__construct();     
     $this->load->model('Model_kriteria');
     $this->load->model('Model_subkriteria');
     $this->load->library('M_db');
     $this->load->database('kriteria');
     $this->load->database('subkriteria');
     $this->load->helper('url');
    }

    public function index()
    { 
      $d['kriteria']=$this->Model_kriteria->kriteria_data('tb_kriteria');
      $this->template->load('template/main', 'perbandingan_sub/subcontainer',$d);
    }

    function getsub()
    {   
      $id=$this->input->get('kriteria');
        $namaKriteria=$this->Model_perbandingan->kriteria_info($id,'nama_kriteria');
        $dSub=$this->mod_kriteria->subkriteria_child($id,'id_nilai ASC');
        $output=array();
        if(!empty($dSub))
        {         
      foreach($dSub as $rK)
      {
        $nama=field_value('nilai_kategori','id_nilai',$rK->id_nilai,'nama_nilai');
        $output[$rK->id_subkriteria]=$nama;
      }
      }
        $d['arr']=$output;
        $d['kriteriaid']=$id;
        $d['namakriteria']=$namaKriteria;
        $this->load->view('perbandingan/subcontainerid', $d);
        $this->template->load('template/main','perbandingan/perbandingan_sub/subcontainerid',$d);
    }

    function updatesub()
      {
        $error=FALSE;
        $kriteriaid=$this->input->post('kriteriaid');
        if(!empty($kriteriaid))
        {
        $msg="";
        $s=array(
        'id_kriteria'=>$kriteriaid,
        );
        $this->m_db->delete_row('tb_subkriteria_nilai',$s);
              
        $cr=$this->input->post('crvalue');
       
        foreach($_POST as $k=>$v)
        {
          if($k!="crvalue" && $k!="kriteriaid")
          {                 
          foreach($v as $x=>$x2)
          {
            $d=array(
            'id_kriteria'=>$kriteriaid,
            'subkriteria_id_dari'=>$k,
            'subkriteria_id_tujuan'=>$x,
            'nilai'=>$x2,
            );
            $this->m_db->add_row('tb_subkriteria_nilai',$d);
          }
          
        }
        $msg="Berhasil update nilai subkriteria";
        $error=FALSE;
      }
            
        
        if($error==FALSE)
        {     
        echo json_encode(array('status'=>'ok','msg'=>$msg));
      }else{
        echo json_encode(array('status'=>'no','msg'=>$msg));
      }
      
      }else{
        $msg="Gagal mengubah nilai subkriteria".$kriteriaid;
        echo json_encode(array('status'=>'no','msg'=>$msg));
      }
      
    }

    function updatesubprioritas()
    {
        $kriteriaid=$this->input->post('kriteriaid');
        $prio=$this->input->post('prio');
        if(!empty($prio))
        {
        foreach($prio as $rk=>$rv)
        {
          $s=array(
          'id_subkriteria'=>$rk,
          );
          if($this->m_db->is_bof('tb_subkriteria_hasil',$s)==TRUE)
          {
            $d=array(
            'id_subkriteria'=>$rk,
            'prioritas'=>$rv,
            );
            $this->m_db->add_row('tb_subkriteria_hasil',$d);
          }else{
            $d=array(         
            'prioritas'=>$rv,
            );
            $this->m_db->edit_row('tb_subkriteria_hasil',$d,$s);
          }
        }
        echo json_encode('ok');
      }else{
        echo json_encode('no');
      }
    }

    function subkriteria_eigen()
    {
        
        $prio=$this->input->post('pri-b');
        if(!empty($prio))
        {
        foreach($prio as $rk=>$rv)
        {
          $s=array(
          'id_subkriteria'=>$rk,
          );
          if($this->m_db->is_bof('tb_subkriteria',$s)==TRUE)
          {
            $d=array(
            'id_subkriteria'=>$rk,
            'subkriteria_eigen'=>$rv,
            );
            $this->m_db->add_row('tb_subkriteria',$d);
          }else{
            $d=array(         
            'subkriteria_eigen'=>$rv,
            );
            $this->m_db->edit_row('tb_subkriteria',$d,$s);
          }
        }
        echo json_encode('ok');
      }else{
        echo json_encode('no');
      }
    }

    function hasil()
    {
      $this->template->load('template/main', 'perbandingan_sub/hitung');
    }

    function proseshitung()
    {
      $this->mod_pro->proseshitung();   
      if($this->mod_pro->proseshitung()==TRUE)
      {
        //set_header_message('success','Proses Beasiswa','Beasiswa telah diproses');
        //redirect(base_url(akses().'/beasiswa/beasiswa').'?id='.$id);
        echo json_encode(array('status'=>'ok'));
      }else{
        //set_header_message('danger','Proses Beasiswa','Beasiswa gagal diproses');
        //redirect(base_url(akses().'/beasiswa/beasiswa'));
        echo json_encode(array('status'=>'no'));
      } 
    }

    function perbandingan_sub_id($id)
    {
      $where = array('id_kriteria' => $id);
      $output=array();
      $dKriteria=$this->Model_subkriteria->tampil_subkriteria_id($id);
      foreach($dKriteria as $rK)
      {
        $output[$rK->id_subkriteria]=$rK->nilai;
      }   
      $data['arr']=$output;
      
      $SKriteria=$this->Model_subkriteria->get_table('tb_subkriteria_nilai');
      foreach($SKriteria as $S)
      {
        $Snilai[$S->id_kriteria][$S->subkriteria_id_dari][$S->subkriteria_id_tujuan]=$S->nilai;
      }   
      $data['nilai']=$Snilai;
     
        $data['record']=$this->Model_kriteria->tampil_edit_kriteria($id)->result();
        $data['kriteria']=$this->Model_kriteria->kriteria_data('tb_kriteria');
        $data['kriteria_id']=$id;
        $this->template->load('template/main','perbandingan_sub/subcontainerid',$data);
    }

}