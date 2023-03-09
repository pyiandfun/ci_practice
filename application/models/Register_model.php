<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register_model extends CI_Model{

    public function save_user($username,$password,$email) {
        $data = array(
            'username' => $username,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        );
        // var_dump($data);die();
        $this->db->insert('users', $data);
    }
}
?>