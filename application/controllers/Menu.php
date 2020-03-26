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
            $this->load->view('templates/footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'telp' => htmlspecialchars($this->input->post('telp', true)),
                'address' => htmlspecialchars($this->input->post('address', true)),
                'school' => htmlspecialchars($this->input->post('school', true))
            ];
            $this->db->insert('user_data', $data);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                New data has been added
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>'
            );
            redirect('menu/database');
        }
    }

    public function logic()
    {
        $data['title'] = 'Logic';
        $this->form_validation->set_rules('number', 'number', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('menu/logic', $data);
            $this->load->view('templates/footer');
        } else {
            $number = $this->input->post('number');
            $data['number_output'] = [];
            $number_2 = '';
            for ($i = 0; $i < strlen($number); $i++) {
                $number_1 = $number[$i];
                for ($j = strlen($number) - 1; $j > $i; $j--) {
                    $number_2[$j] = '0';
                }
                array_push($data['number_output'], $number_1 . trim($number_2));
                $number_2 = '';
                str_replace(' ', '', $number_2);
            }
            $this->load->view('templates/header', $data);
            $this->load->view('menu/logic', $data);
            $this->load->view('templates/footer');
        }
    }
}
