<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Web extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['judul'] = 'Halaman Depan';
        $this->load->view('pertemuan-4/template/v_header',$data);
        $this->load->view('pertemuan-4/v_index',$data);
        $this->load->view('pertemuan-4/template/v_footer',$data);
    }
    public function about()
    {
        $data['judul'] = 'Halaman About';
        $this->load->view('pertemuan-4/template/v_header',$data);
        $this->load->view('pertemuan-4/v_about',$data);
        $this->load->view('pertemuan-4/template/v_footer',$data);
    }
}
