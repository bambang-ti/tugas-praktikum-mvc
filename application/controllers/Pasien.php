<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pasien extends CI_Controller{

    public function index ()
    {
        $this->load->model('pasien model','pasien1');
        $this->pasien1->id=1;
        $this->pasien1->kode='010001';
        $this->pasien1->nama='Faiz Fikri';
        $this->pasien1->gender='L';

        $this->load->model('pasien model','pasien2');
        $this->pasien1->id=2;
        $this->pasien1->kode='020001';
        $this->pasien1->nama='Pandan Wangi';
        $this->pasien1->gender='P';

        $list_pasien = [$this->pasien1, $this->pasien2];
        $data['list pasien']=$list_pasien;

        $this->load->view('header');
        $this->load->view('pasien/index', $data);
        $this->load->view('footer');


    }
}