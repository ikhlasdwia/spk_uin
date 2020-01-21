<?php

class Model_periode extends CI_Model {
	
	public $table="tb_periode";

	function save($tabel,$data)
	{
		$this->db->insert($tabel,$data);
	}

	function tampil_periode()
	{
		$query=$this->db->order_by('id_periode','DESC')->get('tb_periode');
		return $query->result();
	}

	function save_update($table,$id,$data)
	{
		$this->db->where('id_periode',$id);
		$this->db->update($table,$data);
	}

	function tampil_detail_periode($id)
	{
		return $this->db->get_where('tb_periode',array('id_periode' => $id));
	}

	function tampil_edit_periode($id)
	{
		return $this->db->get_where('tb_periode',array('id_periode' => $id));
	}

	function hapus_periode($table,$id){
		$this->db->where('id_periode',$id);
		$this->db->delete($table);
		}	

	function get_numrow($t){
		return $this->db->get($t)->num_rows();
	}		
	}



?>