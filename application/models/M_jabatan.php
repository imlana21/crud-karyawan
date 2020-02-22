<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jabatan extends CI_Model {
	
	private $tbname = 'Jabatan';

	function __construct() {
		parent::__construct();
	}

	function get_all() {
		return $this->db->get($this->tbname)->result();
	}

	function get_one($id) {
		$this->db->where('kd_jabatan', $id);

		return $this->db->get($this->tbname)->result();
	}

	function delete_data($id) {
		$this->db->where('kd_jabatan', $id);

		return $this->db->delete($this->tbname);
	}

	function edit_data($data) {
		$this->db->where('kd_jabatan', $data['kd_jabatan']);

		return $this->db->update($this->tbname, $data);
	}

	function add_data($data) {
		return $this->db->insert($this->tbname, $data);
	}

}
