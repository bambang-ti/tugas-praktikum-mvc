<?php
defined('BASEPATH') OR exit('No direct script access alowed');

class Belajar_controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
    }

    public function home()
    {}
}