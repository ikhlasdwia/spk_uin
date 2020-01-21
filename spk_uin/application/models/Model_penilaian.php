<?php

class Model_penilaian extends CI_Model {
	
	public $table="tb_penilaian";

	function save($tabel,$data)
	{
		$this->db->insert($tabel,$data);
	}

	function tampil_penilaian()
	{
		$query=$this->db->order_by('id_penilaian','DESC')->get('tb_penilaian');
		return $query->result();
	}

	function tampil_penilaian1()
	{
		$query = $this->db->query("SELECT m.id_penilaian as id_penilaian, m.id_mhs, m.nim as nim, m.nama_mhs as nama_mhs, f.nama_fak as fak, j.nama_jur as jur
			FROM tb_penilaian m
			LEFT JOIN fakultas f ON f.id_fak=m.id_fak
			LEFT JOIN jurusan j ON j.id_jur=m.id_jur
			order by m.id_mhs desc");
		return $query->result();
	}
	function tampil_penilaian2($penilaian)
	{
		$query = $this->db->query("SELECT m.id_penilaian as id_penilaian, m.id_mhs as id_mhs, m.nim as nim, m.nama_mhs as nama_mhs,m.id_fak as id_fak,m.id_jur as id_jur, f.nama_fak as fak, j.nama_jur as jur
			FROM tb_penilaian m
			LEFT JOIN fakultas f ON f.id_fak=m.id_fak
			LEFT JOIN jurusan j ON j.id_jur=m.id_jur
			where m.id_penilaian =".$penilaian);
		return $query;
	}

	function tampil_penilaian3($penilaian)
	{
		$query = $this->db->query("SELECT id_penilaian, pm.id_penilaian_mhs as id_penilaian_mhs, k.id_kriteria as id_kriteria, k.nama_kriteria as nama_kriteria, id_nilai, nilai
			FROM tb_penilaian_mhs pm
			LEFT JOIN tb_kriteria k ON k.id_kriteria=pm.id_kriteria
			LEFT JOIN tb_subkriteria s ON s.id_subkriteria=pm.id_nilai 
			where pm.id_penilaian =".$penilaian);

		return $query;
	} 

	function save_update($table,$id,$data)
	{
		$this->db->where('id_penilaian',$id);
		$this->db->update($table,$data);
	}
	function update_where($table,$id,$data)
	{
		$this->db->where($id);
		$this->db->update($table,$data);
	}

	function get_where($t,$data)
	{
		return $this->db->get_where($t,$data)->result();
		
	}
	function get_order($t,$data)
	{
		return $this->db->order_by('total','DESC')->get_where($t,$data)->result();
		
	}

	function tampil_edit_penilaian($id)
	{
		return $this->db->get_where('tb_penilaian',array('id_penilaian' => $id));
	}

	function hapus_penilaian($table,$id){
		$this->db->where($id);
		$this->db->delete($table);
	}	

	function get_jurusan($id){
        $hasil=$this->db->query("SELECT * FROM jurusan WHERE id_fak='$id'");
        return $hasil->result();
    }

    function hitung()
	{
		// $query=$this->db->order_by('id_penilaian','DESC')->get('tb_penilaian');
		return $query->result();
	}
	function get($table)
	{
		
		return $this->db->get($table)->result();
	}

	

}


?>