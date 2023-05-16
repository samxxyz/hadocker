<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ulasan extends CI_Controller
{

    public function index()
    {
        
        $title['title'] = ['header' => 'Ulasan', 'dash' => 'Ulasan'];
        $this->load->view('member/template/header', $title);
        $this->load->view('member/ulasan');
        $this->load->view('member/template/footer');
    }


    }

