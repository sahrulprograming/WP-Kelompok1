<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matkul extends CI_Controller
{
	public function index()
	{
		$data['kelompok1'] = $this->M_kelompok1->anggota();
		$this->load->view('pertemuan-3/kelompok1', $data);
	}
	public function form()
	{
		$this->load->view('pertemuan-3/form_matkul');
	}
	public function tampil_data()
	{
		$this->form_validation->set_rules('kode', 'Kode Matakuliah', 'required|min_length[3]', [
			'required' => 'Kode Matakuliah Harus diisi',
			'min_lenght' => 'Kode terlalu pendek'
		]);
		$this->form_validation->set_rules('nama', 'Nama Matakuliah', 'required|min_length[3]', [
			'required' => 'Nama Matakuliah Harus diisi',
			'min_lenght' => 'Nama terlalu pendek'
		]);
		if ($this->form_validation->run() != true) {
			$this->load->view('pertemuan-3/form_matkul');
		} else {
			$data = [
				'kode' => $this->input->post('kode'),
				'nama' => $this->input->post('nama'),
				'sks' => $this->input->post('sks')
			];
			$this->load->view('pertemuan-3/data_matkul', $data);
		}
	}
}
