<?php
/**
 * Created by PhpStorm.
 * User: Certimeter
 * Date: 29/06/2016
 * Time: 14:56
 */

class Membri_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get_members(){
        $this->db->select('MemberID,Name,Surname,Photo,MemberFrom');
        $this->db->order_by("MemberFrom", "desc");
        $query = $this->db->get('members');
        return $query->result();
    }

    public function get_latest_members($limit){
        $this->db->select('MemberID,Name,Surname,Photo,MemberFrom');
        $this->db->order_by("MemberFrom", "desc");
        $this->db->limit($limit);
        $query = $this->db->get('members');
        return $query->result();
    }

    public function get_member_details($memberID){
        $this->db->select('MemberID,Name,Surname,Photo,MemberFrom');
        $this->db->where('MemberID',$memberID);
        $query = $this->db->get('members');
        return $query->result();
    }

    public function get_members_by_eventID($eventID){
        $this->db->select('MemberID,Name,Surname,Photo,MemberFrom');
        $this->db->join('relatedmembersandevents', 'members.MemberID = relatedmembersandevents.RelatedMemberID');
        $this->db->where('relatedmembersandevents.RelatedEventID',$eventID);
        $this->db->order_by("Surname", "asc");
        $query = $this->db->get('members');
        return $query->result();
    }

}