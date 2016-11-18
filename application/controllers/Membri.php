<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Membri extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->model('Membri_model');
        $data['query'] = $this->Membri_model->get_members();
        $this->load->view('membri',$data);
    }

    public function member_details(){
        $memberID = $this->uri->segment('2');

        $this->load->model('Membri_model');
        $data['query'] = $this->Membri_model->get_member_details($memberID);

        $this->load->model("Eventi_model");
        $data['events'] = $this->Eventi_model->get_events_by_memberID($memberID);

        $this->load->model("Galleria_model");
        $data['gallery'] = $this->Galleria_model->get_galleries_by_memberID($memberID);

        $this->load->view('dettaglio_membro',$data);

    }
}