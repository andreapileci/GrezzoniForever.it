<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
        $history = $this->short_history();
        $data['history'] = $history[0]->ShortDescription;

        $events = $this->latest_events();
        $data['events'] = $events;

        $members = $this->latest_members();
        $data['members'] = $members;

        $myths = $this->latest_myths();
        $data['myths'] = $myths;

        $galleries = $this->latest_galleries();
        $data['galleries'] = $galleries;

		$this->load->view('home',$data);
	}

    public function short_history(){
        $this->load->model('Storia_model');
        $query = $this->Storia_model->get_short_history();
        return $query;
    }

    public function latest_events(){
        $this->load->model('Eventi_model');
        $query = $this->Eventi_model->get_latest_events($this->config->item('latest_events_row_limit'));
        return $query;
    }

    public function latest_members(){
        $this->load->model("Membri_model");
        $query = $this->Membri_model->get_latest_members($this->config->item('latest_members_row_limit'));
        return $query;
    }

    public function latest_myths(){
        $this->load->model("Miti_model");
        $query = $this->Miti_model->get_latest_myths($this->config->item('latest_myths_row_limit'));
        return $query;
    }

    public function latest_galleries(){
        $this->load->model("Galleria_model");
        $query = $this->Galleria_model->get_latest_galleries($this->config->item('latest_gallery_row_limit'));
        return $query;
    }



}
