<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin extends CI_Controller {

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
        $this->load->library('session');

        if($this->session->userdata('username') == '') {
            $this->login();
        }
        else
        {
            $this->load->view("admin/home");
        }
    }

    public function login()
    {
        $this->load->library('session');
        if($this->session->userdata('username') == '') {
            $this->load->view('admin/login');
        }
        else
        {
            $this->load->view("admin/home");
        }
    }

    public function login_validation(){
        $this->load->library('session');

        if($this->session->userdata('username') == '')
        {

            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required',
                array('required' => 'You must provide a %s.')
            );
            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('errors/error_login');
                $this->load->view('admin/login');
            }
            else {
                $this->load->model('Admin_model');
                $data['query'] = $this->Admin_model->login($this->input->post('username'), md5($this->input->post('password')));

                if ($data['query'] != null) {
                    $sess_array = array(
                        'username' => $this->input->post('username')
                    );

                    $this->load->library('session');
                    $this->session->set_userdata($sess_array);

                    $this->load->view("admin/home");
                }
                else
                {
                    $this->load->view('errors/error_login');
                    $this->load->view('admin/login');
                }
            }
        }
        else
        {
            $this->load->view("admin/home");
        }

    }

    public function logout(){
        $this->load->library('session');
        $array_items = array('username' => '');
        $this->session->unset_userdata($array_items);
        $this->session->sess_destroy();
        $this->load->library('form_validation');
        $this->load->view('admin/login');
    }
}