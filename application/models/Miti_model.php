<?php
/**
 * Created by PhpStorm.
 * User: Certimeter
 * Date: 29/06/2016
 * Time: 14:56
 */

class Miti_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get_myths(){
        $this->db->select('Name,Surname,Photo,Phrase');
        $this->db->order_by("Surname", "asc");
        $query = $this->db->get('myths');
        return $query->result();
    }

    public function get_latest_myths($limit){
        $this->db->select('Name,Surname,Photo,Phrase');
        $this->db->order_by("Surname", "asc");
        $this->db->limit($limit);
        $query = $this->db->get('myths');
        return $query->result();
    }

}