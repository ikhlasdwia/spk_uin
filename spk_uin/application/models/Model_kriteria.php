<?php

class Model_kriteria extends CI_Model {
	
	public $table="tb_kriteria";

	function save($tabel,$data)
	{
		$this->db->insert($tabel,$data);
	}

	function tampil_kriteria()
	{
		$query=$this->db->order_by('id_kriteria','ASC')->get('tb_kriteria');
		return $query->result();
	}

	function update_data($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}

	function save_update($table,$id,$data)
	{
		$this->db->where('id_kriteria',$id);
		$this->db->update($table,$data);
	}

	function tampil_edit_kriteria($id)
	{
		return $this->db->get_where('tb_kriteria',array('id_kriteria' => $id));
	}

	function hapus_kriteria($table,$id){
		$this->db->where('id_kriteria',$id);
		$this->db->delete($table);
		}	
	
	function kriteria_data($table)
    {
    	$this->db->order_by('id_kriteria', 'asc');
        //$d=$this->db->get_data($this->tb_kriteria,$where,$orderK);
        $d=$this->db->get($table);
        return $d->result();
    }

    function kriteria_nilai($table)
    {
    	$this->db->order_by('id_kriteria_nilai', 'asc');
        //$d=$this->db->get_data($this->tb_kriteria,$where,$orderK);
        $d=$this->db->get($table);
        return $d->result();
    }
    function subkriteria_child($kriteriaID,$orderK="nama_subkriteria")
    {
        $s=array(
        'id_kriteria'=>$kriteriaID,
        );
        $d=$this->subkriteria_data($s,$orderK);
        return $d;
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }


}

?>