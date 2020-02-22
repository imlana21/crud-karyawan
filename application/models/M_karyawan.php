<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_karyawan extends CI_Model {
	
	private $tbname = 'Karyawan';

	function __construct() {
		parent::__construct();
	}

	function get_all() {
		$query = 'SELECT id_karyawan, nama, gender, alamat, no_hp, jabatan';
		$query .= ' FROM '.$this->tbname.' INNER JOIN Jabatan';
		$query .= ' ON '.$this->tbname.'.kd_jabatan = Jabatan.kd_jabatan';

		return $this->db->query($query)->result();
	}

	function get_one($id) {
		$query = 'SELECT * FROM Karyawan WHERE '.$this->tbname.'.id_karyawan = '.$id;

		return $this->db->query($query)->result();
	}

	function get_jabatan() {
		return $this->db->get('Jabatan')->result();
	}

	function delete_data($id) {
		$query = $this->db->query('DELETE FROM `Karyawan` WHERE `Karyawan`.`id_karyawan` = '.$id);

		return $query;
	}

	function add_data($data) {
		return $this->db->insert($this->tbname, $data);
	}

	function edit_data($data) {
		$this->db->where('id_karyawan', $data['id_karyawan']);

		return $this->db->update($this->tbname, $data);
	}

}

