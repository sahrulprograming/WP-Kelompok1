<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matkul extends CI_Controller
{
	public function index()
	{
		$this->load->view('kelompok1');
	}
	public function form()
	{
		$this->load->view('welcome_message');
	}
	public function tampil_data()
	{
	}
}
