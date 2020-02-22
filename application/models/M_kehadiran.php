<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kehadiran extends CI_Model {

	private $tbname = 'Kehadiran';

	function __construct() {
		parent::__construct();
	}

	function get_all() {
		$query = 'SELECT id_kehadiran, nama, hari, tanggal, jam_datang, jam_pulang, timediff(jam_pulang, jam_datang) as lama_kerja ';
		$query .= 'FROM '.$this->tbname.' INNER JOIN Karyawan ';
		$query .= 'ON '.$this->tbname.'.id_karyawan = Karyawan.id_karyawan';

		return $this->db->query($query)->result();
	}

	function get_karyawan() {
		$this->db->select('id_karyawan, nama');

		return $this->db->get('Karyawan')->result();;
	}

	function get_one($id) {
		$this->db->where('id_kehadiran', $id);

		return $this->db->get($this->tbname)->result();
	}

	function delete_data($id) {
		$this->db->where('id_kehadiran', $id);

		return $this->db->delete($this->tbname);
	}

	function edit_data($id) {
		$query = "UPDATE `".$this->tbname."` SET `jam_pulang` = CURRENT_TIME WHERE id_kehadiran = ".$id;

		return $this->db->query($query);
	}

	function add_data($data) {
		$query = "INSERT INTO `Kehadiran`(`id_karyawan`,`hari`,`tanggal`, `jam_datang`)";
		$query .= " VALUES ('".$data."', WEEKDAY(CURRENT_TIMESTAMP), CURRENT_DATE, CURRENT_TIME)";

		return $this->db->query($query);
	}

}
	