<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kehadiran extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('m_kehadiran');
	}

	function index() {
		$send['data'] = $this->m_kehadiran->get_all();
		$send['title'] = 'Data Kehadiran';

		$this->load->view('kehadiran/lihat', $send);
	}	

	function delete($id) {
		$this->m_kehadiran->delete_data($id);

		echo "<script> alert('Sukses Hapus'); window.history.back(); </script>";		
	}

	function edit($id) {
		if ($this->m_kehadiran->edit_data($id)) {
			echo "<script> alert('Sukses Edit Data');  window.location.href = '".site_url('kehadiran')."'; </script>";
		} else {
			echo "<script> alert('Gagal Edit Data');  window.location.href = '".site_url('kehadiran')."'; </script>";
		}
	}

	function tambah() {
		$send['title'] = 'Tambah Data Kehadiran';
		$send['karyawan'] = $this->m_kehadiran->get_karyawan();

		$this->load->view('kehadiran/tambah', $send);
	}	

	function tambah_action() {
		$data = $this->input->post('nama');

		if ($this->m_kehadiran->add_data($data)) {
			echo "<script> alert('Sukses Tambah Data'); window.location.href = '".site_url('kehadiran')."'; </script>";
		} else {
			echo "<script> alert('Gagal Tambah Data'); window.location.href = '".site_url('kehadiran/tambah')."'; </script>";
		}
	}
}