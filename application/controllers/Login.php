<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

    public function index() {
        $this->load->view('pages/login');
    }

    public function login_validation() {
        $this->load->library('form_validation');
        $email = $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $password = $this->form_validation->set_rules('password', 'Password', 'required');
        
        if ($this->form_validation->run()) {

            $this->load->model('login_model');

            //check useremail n pwd
            $email = $this->input->post('email');
            $password =$this->input->post('password'); 
            $this->login_model->verify_password($email,$password);

            // set session 'loggedin'
            $this->session->set_userdata('email', $email);
            $this->session->set_userdata('password', $password);

            redirect('pages/view/home');

        } else {
            $this->session->set_flashdata('error', 'Invalid email or password.');
            $this->load->view('pages/login');
        }
    }
}
