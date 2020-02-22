<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('m_karyawan');
	}

	function index() {
		$send['data'] = $this->m_karyawan->get_all();
		$send['title'] = 'Data Karyawan';

		$this->load->view('karyawan/lihat', $send);
	}

	function delete($id) {
		$this->m_karyawan->delete_data($id);

		echo "<script> alert('Sukses Hapus'); window.history.back(); </script>";
	}

	function edit($id) {
		$send['data'] = $this->m_karyawan->get_one($id);
		$send['jabatan'] = $this->m_karyawan->get_jabatan();
		$send['title'] = 'Edit Data Karyawan';
		$this->load->view('karyawan/edit', $send);
	}

	function edit_action() {
		$data = array(
			'id_karyawan' => $this->input->post('id'),
			'nama' => $this->input->post('nama'),
			'no_hp' => $this->input->post('hp'),
			'gender' => $this->input->post('gender'),
			'alamat' => $this->input->post('alamat'),
			'kd_jabatan' => $this->input->post('jabatan'),);

		if ($this->m_karyawan->edit_data($data)) {
			echo "<script> alert('Sukses Edit Data'); window.location.href = '".site_url('karyawan')."'; </script>";
		} else {
			$script ="<script> alert('Gagal Edit Data'); window.location.href = '";
			$script .= site_url('karyawan/edit').$data['id_karyawan'];
			$script .= "'; </script>";

			echo $script;
		}

	}

	function tambah() {
		$send['jabatan'] = $this->m_karyawan->get_jabatan();
		$send['title'] = 'Tambah Data Karyawan';
		$this->load->view('karyawan/tambah', $send);
	}

	function tambah_action() {
		$data = array(
			'nama' => $this->input->post('nama'),
			'no_hp' => $this->input->post('hp'),
			'gender' => $this->input->post('gender'),
			'alamat' => $this->input->post('alamat'),
			'kd_jabatan' => $this->input->post('jabatan'),);

		if ($this->m_karyawan->add_data($data)) {
			echo "<script> alert('Sukses Tambah Data'); window.location.href = '".site_url('karyawan')."'; </script>";
		} else {
			echo "<script> alert('Gagal Tambah Data'); window.location.href = '".site_url('karyawan/tambah')."'; </script>";
		}
	}
}