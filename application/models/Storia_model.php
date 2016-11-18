<?php
/**
 * Created by PhpStorm.
 * User: Certimeter
 * Date: 29/06/2016
 * Time: 14:56
 */

class Storia_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get_short_history(){
        $this->db->select('ShortDescription');
        $query = $this->db->get('history');
        return $query->result();
    }

    public function get_long_history(){
        $this->db->select('LongDescription');
        $query = $this->db->get('history');
        return $query->result();
    }

}