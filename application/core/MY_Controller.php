<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->library('session'); 

        if(! $this->session->userdata('email') && ! $this->session->userdata('password')) {
            $this->load->view('pages/login');  
        } 
    }

    public function index() {
        $this->load->view('posts/index');  
    }
}
?>