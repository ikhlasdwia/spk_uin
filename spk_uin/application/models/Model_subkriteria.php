<?php

class Model_subkriteria extends CI_Model {
	
	public $table1="tb_kriteria";
	public $table="tb_subkriteria";

	function save($tabel,$data)
	{
		$this->db->insert($tabel,$data);
	}

	function tampil_subkriteria()
	{
		$query=$this->db->order_by('id_subkriteria','DESC')->get('tb_subkriteria');
		return $query->result();
	}

	function tampil_subkriteria_id($id)
	{
		$query=$this->db->order_by('id_subkriteria','ASC')->get_where('tb_subkriteria',array('id_kriteria' => $id));
		return $query->result();
	}

	function get_table($table)
    {
    	
        //$d=$this->db->get_data($this->tb_kriteria,$where,$orderK);
        $d=$this->db->get($table);
        return $d->result();
    }

	function save_update($table,$id,$data)
	{
		$this->db->where('id_subkriteria',$id);
		$this->db->update($table,$data);
	}

	function tampil_edit_subkriteria($id)
	{
		return $this->db->get_where('tb_subkriteria',array('id_subkriteria' => $id));
	}

	function hapus_subkriteria($table,$id)
	{
		$this->db->where('id_subkriteria',$id);
		$this->db->delete($table);
	}	

	// function get_all()
 //    {
 //        $this->db->order_by($this->id, $this->order);
 //        return $this->db->get($this->table)->result();
 //    }

    function get_by_id($id)
    {
        $this->db->where('id_kriteria', $id);
        return $this->db->get($this->table)->result();
    }

    function get_by_id1($id)
    {
        $this->db->where('id_kriteria', $id);
        return $this->db->get($this->table1)->result();
    }

    function tampil_subkriteria_by_id($id)
    {
    	$query=$this->db->query("SELECT s.id_subkriteria as id_subkriteria, s.nama_subkriteria as nama_subkriteria, s.nilai as nilai, k.id_kriteria as id_kriteria, nama_kriteria
    		FROM tb_subkriteria s
    		JOIN tb_kriteria k
    		ON k.id_kriteria=s.id_kriteria
    		WHERE s.id_kriteria='$id'");
    	return $query; 
    }
}
