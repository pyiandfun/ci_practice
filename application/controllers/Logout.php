<?php
class Logout extends MY_Controller {
    public function __construct()
    {
        parent::__construct(); 
    }

    public function index() {
        $this->load->library('session');
        $this->session->sess_destroy();
        $this->load->view('pages/login');
    }
}

?>