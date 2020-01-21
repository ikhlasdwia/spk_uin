<?php

class Model_mahasiswa extends CI_Model {
	
	public $table="tb_mhs";

	function save($tabel,$data)
	{
		$this->db->insert($tabel,$data);
	}

	function tampil_mahasiswa()
	{
		$query=$this->db->order_by('id_mhs','DESC')->get('tb_mhs');
		return $query->result();
	}
	function tampil_detail_mhs($id)
	{
		$query = $this->db->query("SELECT m.id_mhs as id_mhs, m.nim as nim, m.nama_mhs as nama_mhs, f.nama_fak as fak, j.nama_jur as jur, f.id_fak as idFak, j.id_jur as idJur, m.jk as jk, m.tgl_terdaftar as tgl 
			FROM tb_mhs m
			LEFT JOIN fakultas f ON f.id_fak=m.id_fak
			LEFT JOIN jurusan j ON j.id_jur=m.id_jur
			WHERE m.nim='$id'");
		return $query->row(); 
	}

	function tampil_mahasiswa1()
	{
		$query = $this->db->query("SELECT m.id_mhs, m.nim as nim, m.nama_mhs as nama_mhs, f.nama_fak as fak, j.nama_jur as jur, m.jk as jk, m.tgl_terdaftar as tgl 
			FROM tb_mhs m
			LEFT JOIN fakultas f ON f.id_fak=m.id_fak
			LEFT JOIN jurusan j ON j.id_jur=m.id_jur
			order by m.id_mhs desc");
		return $query->result();
	}

	function save_update($table,$id,$data)
	{
		$this->db->where('id_mhs',$id);
		$this->db->update($table,$data);
	}

	function tampil_edit_mahasiswa($id)
	{
		return $this->db->get_where('tb_mhs',array('id_mhs' => $id));
	}

	function hapus_mahasiswa($table,$id){
		$this->db->where('id_mhs',$id);
		$this->db->delete($table);
	}	

	function get_jurusan($id){
        $hasil=$this->db->query("SELECT * FROM jurusan WHERE id_fak='$id'");
        return $hasil->result();
    }

    function tampil_detail_mahasiswa($id)
	{
		// return $this->db->get_where('tb_mhs',array('id_mhs' => $id));
		$query = $this->db->query("SELECT m.id_mhs as id_mhs, m.nim as nim, m.nama_mhs as nama_mhs, f.nama_fak as id_fak, j.nama_jur as id_jur, m.jk as jk, m.tempat_lahir as tempat_lahir, m.tgl_lahir as tgl_lahir, m.alamat as alamat, m.tgl_terdaftar as tgl_terdaftar 
			FROM tb_mhs m
			LEFT JOIN fakultas f ON f.id_fak=m.id_fak
			LEFT JOIN jurusan j ON j.id_jur=m.id_jur
			WHERE m.id_mhs='$id'");
		return $query; 
	}
}
?>