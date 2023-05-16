<?php

defined('BASEPATH') or exit('No direct script access allowed');

class tagihan extends CI_Controller
{

    public function index()
    {
        
        $title['title'] = ['header' => 'tagihan', 'dash' => 'tagihan'];
        $this->load->view('member/template/header', $title);
        $this->load->view('member/tagihan');
        $this->load->view('member/template/footer');
    }


    }