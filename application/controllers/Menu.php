<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Home';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('menu/home');
        $this->load->view('templates/auth_footer');
    }
}
