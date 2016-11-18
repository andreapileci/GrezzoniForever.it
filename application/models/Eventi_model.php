<?php
/**
 * Created by PhpStorm.
 * User: Certimeter
 * Date: 29/06/2016
 * Time: 14:56
 */

class Eventi_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get_events(){
        $this->db->select('EventID,Title,Logo,Place,StartDate,EndDate');
        $this->db->order_by("EndDate", "desc");
        $query = $this->db->get('events');
        return $query->result();
    }

    public function get_latest_events($limit){
        $this->db->select('EventID,Title,Logo,Place,StartDate,EndDate');
        $this->db->limit($limit);
        $this->db->order_by("EndDate", "desc");
        $query = $this->db->get('events');
        return $query->result();
    }

    public function get_events_by_memberID($memberID){
        $this->db->select('EventID,Title,Logo,Place,StartDate,EndDate');
        $this->db->join('relatedmembersandevents', 'events.EventID = relatedmembersandevents.RelatedEventID');
        $this->db->where('relatedmembersandevents.RelatedMemberID',$memberID);
        $this->db->order_by("EndDate", "desc");
        $query = $this->db->get('events');
        return $query->result();
    }

    public function get_event_details($eventID){
        $this->db->select('EventID,Title,Logo,Place,StartDate,EndDate');
        $this->db->where('EventID',$eventID);
        $query = $this->db->get('events');
        return $query->result();
    }

}