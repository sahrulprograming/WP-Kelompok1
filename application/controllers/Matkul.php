<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matkul extends CI_Controller
{
	public function index()
	{
		$data['kelompok1'] = $this->M_kelompok1->anggota();
		$this->load->view('kelompok1', $data);
	}
	public function form()
	{
		$this->load->view('form_matkul');
	}
	public function tampil_data()
	{
		$data = [
			'kode' => $this->input->post('kode'),
			'nama' => $this->input->post('nama'),
			'sks' => $this->input->post('sks')
		];
		$this->load->view('data_matkul', $data);
	}
}
