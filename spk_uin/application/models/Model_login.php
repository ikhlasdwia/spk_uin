<?php
 
class Model_login extends CI_Model
{

	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}

	function tampil_data($tabel){
		return $this->db->get($tabel)->result();
	}

	function hapus_data($where,$tabel){
		$this->db->where($where);
		$this->db->delete($tabel);
	}
	public function delete_by($id_vendor) {
    $this->db->where('id_akademik', $id_vendor);
    $this->db->delete('tb_admin');
	}
}
