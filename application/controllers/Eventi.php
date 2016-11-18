<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Eventi extends CI_Controller {

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
        $this->load->model('Eventi_model');
        $data['query'] = $this->Eventi_model->get_events();
        $this->load->view('eventi',$data);
    }

    public function event_details(){
        $eventID = $this->uri->segment('2');

        $this->load->model('Eventi_model');
        $data['query'] = $this->Eventi_model->get_event_details($eventID);

        $this->load->model("Membri_model");
        $data['members'] = $this->Membri_model->get_members_by_eventID($eventID);

        $this->load->model("Galleria_model");
        $data['gallery'] = $this->Galleria_model->get_galleries_by_eventID($eventID);

        $this->load->view('dettaglio_evento',$data);

    }
}