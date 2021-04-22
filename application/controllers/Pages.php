<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{

    private $baseUrl;
    private $refererUrl;


    public function __construct()
    {
        parent::__construct();

        $this->load->model("General_model", "gm");
        $this->baseUrl = base_url() . "pages/";
        $this->refererUrl =  (!empty($this->agent->referrer()) ? $this->agent->referrer() : "");
    }


    public function router($function)
    {
        $canProceed = true;
        if ($canProceed) {
            switch ($function) {
                case "home":
                    $this->home();
                    break;
                default:
                    $this->home();
                    break;
            }
        } else {
            $this->showUnauthorized();
        }
    }

    public function view($page = 'home', $data = false)
    {
        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            show_404();
        }

        if ($this->session->has_userdata('message')) {
            $data['message'] = $this->session->userdata('message');
            $this->unsetSession("message");
        }

        if ($this->session->has_userdata('show_loader')) {
            $data['show_loader'] = $this->session->userdata('show_loader');
            $this->unsetSession("show_loader");
        }

        if (empty($data['link'])) {
            $data['link'] = $page;
        }

        $data['baseUrl'] = $this->baseUrl;
        $data['assetsUrl'] = base_url() . "assets/";
        $data['refererUrl'] = $this->refererUrl ? $this->refererUrl : "";

        if (empty($data['title'])) {
            $data['title'] = ucfirst($page);
        }

        if ($this->session->has_userdata('error')) {
            $data['error']['errormessage'] = $this->session->userdata('error');
            $this->unsetSession("error");
        }

        $this->load->view('pages/header', $data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('pages/footer', $data);
    }

    private function home()
    {
        $data['title'] = "Home";
        $this->view("home", $data);
    }

    private function showUnauthorized()
    {
        $data["title"] = "Unauthorized access";
        $this->view("unauthorized", $data);
    }

    private function setSession($sessionName, $sessionData)
    {
        $this->session->set_userdata($sessionName, $sessionData);
    }

    private function unsetSession($sessionName)
    {
        if ($this->session->has_userdata($sessionName)) {
            $this->session->unset_userdata($sessionName);
        }
    }
}
