<?php

defined ('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('register_model');
    }
     
    public function index() {
        $this->load->view('page/register');
    }

    public function validation() {

        $this->form_validation->set_rules('username', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        // var_dump($this->form_validation->run());die();
        if($this->form_validation->run()) {

            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $this->register_model->save_user($username,$email,$password);
            $this->session->set_flashdata('success', 'User registered successfully. Please login.');
            redirect('posts/');
        } else {
            // echo "invalid password";die();
            $this->session->set_userdata('error', 'Invalid email or password.');
            $this->load->view('templates/header');
            $this->load->view('pages/register'); 
            $this->load->view('templates/footer');
            // redirect('pages/view/register');
        }

    }
}
?>