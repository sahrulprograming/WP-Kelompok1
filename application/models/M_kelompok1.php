<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_kelompok1 extends CI_Model
{
    public function anggota()
    {
        $data = [
            1 => [
                'NIM' => "19200616",
                'nama' => "M.Syahrul Saefulah",
                'u_github' => "sahrulprograming",
                'mengerjakan' => "Ya"
            ],
            2 => [
                'NIM' => "19200726",
                'nama' => "Apri Rinaldo",
                'u_github' => "Apri80Rinaldo",
                'mengerjakan' => "Tidak"
            ],
            3 => [
                'NIM' => "19200106",
                'nama' => "Ardiansyah Syam Purnomo",
                'u_github' => "Ardiansyahhh",
                'mengerjakan' => "Tidak"
            ],
            4 => [
                'NIM' => "19200313",
                'nama' => "Mochamad Naufal Setiawan",
                'u_github' => "MochamadNaufalSetiawan",
                'mengerjakan' => "Ya"
            ],
            5 => [
                'NIM' => "19200606",
                'nama' => "Aldian Varonitti",
                'u_github' => "aldianvaroo",
                'mengerjakan' => "Ya"
            ],
            6 => [
                'NIM' => "19200195",
                'nama' => "Daniel Fransisko sitio",
                'u_github' => "fransisco09",
                'mengerjakan' => "Ya"
            ]
        ];
    }
}
