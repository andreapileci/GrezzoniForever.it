<?php
/**
 * Created by PhpStorm.
 * User: Certimeter
 * Date: 22/07/2016
 * Time: 15:49
 */

class Admin_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function login($username,$password){
        $this->db->select('Username');
        $this->db->where('Username',$username);
        $this->db->where('Password',$password);
        $query = $this->db->get('administrators');
        return $query->result();
    }
}