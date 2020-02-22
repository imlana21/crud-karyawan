<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('m_jabatan');
	}

	function index() {
		$send['data'] = $this->m_jabatan->get_all();
		$send['title'] = 'Data Jabatan';

		$this->load->view('jabatan/lihat', $send);
	}	

	function delete($id) {
		$this->m_jabatan->delete_data($id);

		echo "<script> alert('Sukses Hapus'); window.history.back(); </script>";		
	}

	function edit($id) {
		$send['data'] = $this->m_jabatan->get_one($id);
		$send['title'] = 'Edit Data Jabatan';
		$this->load->view('jabatan/edit', $send);
	}

	function edit_action() {
		$data = array(
			'kd_jabatan' => $this->input->post('id'),
			'jabatan' => $this->input->post('nama'),);

		if ($this->m_jabatan->edit_data($data)) {
			echo "<script> alert('Sukses Edit Data'); window.location.href = '".site_url('jabatan')."'; </script>";
		} else {
			$script ="<script> alert('Gagal Edit Data'); window.location.href = '";
			$script .= site_url('jabatan/edit').$data['kd_jabatan'];
			$script .= "'; </script>";

			echo $script;
		}
	}

	function tambah() {
		$send['title'] = 'Tambah Data Jabatan';
		$this->load->view('jabatan/tambah', $send);
	}	
	function tambah_action() {
		$data = array( 'jabatan' => $this->input->post('nama'));

		if ($this->m_jabatan->add_data($data)) {
			echo "<script> alert('Sukses Tambah Data'); window.location.href = '".site_url('jabatan')."'; </script>";
		} else {
			echo "<script> alert('Gagal Tambah Data'); window.location.href = '".site_url('jabatan/tambah')."'; </script>";
		}
	}
}