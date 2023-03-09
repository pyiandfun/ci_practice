<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function validate_user($email, $password) {
        $query = $this->db->get_where('users', array('email' => $email, 'password' => md5($password)));
        $user = $query->row();

        if ($query->num_rows() == 1) {
            // User credentials are valid, return the user object
            return $user;
        } else {
            // User credentials are invalid
            return false;
        }
    }

    public function verify_password($email,$password) {

        $this->db->select('password');
        $this->db->where('email', $email);
        $query = $this->db->get('users')->result_array();
        $result = $query[0]['password'];
        // echo "<pre>"; var_dump($result[0]['password']); echo "</pre>"; die(); 
        
        if(password_verify($password,$result)) {
            return true;
        } else {
            return false;
        }   
    }
}
?>