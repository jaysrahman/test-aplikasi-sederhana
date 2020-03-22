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

    public function database()
    {
        $data['users'] = $this->db->get('user_data')->result_array();
        $this->form_validation->set_rules('name', 'name', 'trim|required');
        $this->form_validation->set_rules('telp', 'telp', 'trim|required');
        $this->form_validation->set_rules('address', 'address', 'trim|required');
        $this->form_validation->set_rules('school', 'school', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Database';
            $this->load->view('templates/header', $data);
            $this->load->view('menu/database', $data);
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'telp' => htmlspecialchars($this->input->post('telp', true)),
                'address' => htmlspecialchars($this->input->post('address', true)),
                'school' => htmlspecialchars($this->input->post('school', true))
            ];
            $this->db->insert('user_data', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulations! Your data has been added!</div>');
            redirect('menu/database');
        }
    }
}
