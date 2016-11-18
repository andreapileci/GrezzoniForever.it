<?php
/**
 * Created by PhpStorm.
 * User: Certimeter
 * Date: 29/06/2016
 * Time: 14:56
 */

class Galleria_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get_galleries(){
        $this->db->select('Description,PhotoBig');
        $this->db->order_by("GalleryID", "desc");
        $query = $this->db->get('gallery');
        return $query->result();
    }

    public function get_latest_galleries($limit){
        $this->db->select('Description,PhotoBig');
        $this->db->order_by("GalleryID", "desc");
        $this->db->limit($limit);
        $query = $this->db->get('gallery');
        return $query->result();
    }

    public function get_galleries_by_memberID($memberID){
        $this->db->select('Description,PhotoBig');
        $this->db->join('relatedmembersandgalleries', 'gallery.GalleryID = relatedmembersandgalleries.RelatedGalleryID');
        $this->db->where('relatedmembersandgalleries.RelatedMemberID',$memberID);
        $this->db->order_by("GalleryID", "desc");
        $query = $this->db->get('gallery');
        return $query->result();
    }

    public function get_galleries_by_eventID($eventID){
        $this->db->select('Description,PhotoBig');
        $this->db->join('relatedeventsandgalleries', 'gallery.GalleryID = relatedeventsandgalleries.RelatedGalleryID');
        $this->db->where('relatedeventsandgalleries.RelatedEventID',$eventID);
        $this->db->order_by("GalleryID", "desc");
        $query = $this->db->get('gallery');
        return $query->result();
    }

}