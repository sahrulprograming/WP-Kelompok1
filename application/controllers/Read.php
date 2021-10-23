<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Read extends CI_Controller
{
    public function buku(){
        $data['title'] = 'List Buku Perpustakaan Kami';
        $fields = $this->db->list_fields('v_buku');
        $data['columns'] = array_slice($fields,1,7);
        $data['buku'] = $this->db->get('v_buku')->result_array();
        $this->load->view('template/head', $data);
        $this->load->view('template/navbar');
        $this->load->view('v_buku');
        $this->load->view('template/footer');
    }
}