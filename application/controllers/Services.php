<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Services extends CI_Controller
{

    private $baseUrl;
    private $homeUrl;
    private $refererUrl;
    private $selectedCategory;
    private $selectedLocation;


    public function __construct()
    {
        parent::__construct();

        $this->load->model("General_model", "gm");
        $this->homeUrl = base_url();
        $this->baseUrl = base_url() . "service";
        $this->refererUrl =  (!empty($this->agent->referrer()) ? $this->agent->referrer() : "");

        if ($this->input->get("category")) {
            $this->selectedCategory = $this->input->get("category");
            if (!empty($this->selectedCategory)) {
                $this->setSession("selectedCategory", $this->selectedCategory);
            }
        } else if ($this->session->has_userdata("selectedCategory")) {
            $this->selectedCategory = $this->session->userdata("selectedCategory");
        }

        //         $services = array(
        //             "Plumping",
        //             "Electrical",
        //             "Painting",
        //             "Carpentry",
        //             "Painters",
        //             "Cleaning(Sofa,Carpet,House Deep Clean,Bathroom Cleaning,Kitchen Cleaning)",
        //             "Pest Care",
        //             "Water Tank cleaning",
        //             "Aquarium Cleaning",
        //             "Home Appliance",
        //             "Chimney Cleaning",
        //             "CCTV Installation &Services",
        //             "Indoor & Outdoor Plants",
        //             "Pet Hostel Services",
        //             "Chauffeur Services",
        //             "Companion Services",
        //             "Gift Services",
        //             "House Keeping",
        //             "Disinfection & Sanitation",
        //             "Dry cleaning & Laundry Services",
        //             "Aluminum Fabrication",
        //             "Septic tank Cleaning",
        //             "Sofa Repair & Services(Rear/Polish/upholstery/Maintenance)",
        //             "Passport Renewals",
        //         );
        // $i=14;
        // foreach($services as $serv){
        //     $this->gm->putData("mservices",array("service_id"=>$i++,"name"=>$serv,"parent_id"=>"1"));
        // 
        // }
        // exit(0);
    }


    public function router($function = "home")
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
        if (!file_exists(APPPATH . 'views/services/' . $page . '.php')) {
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

        $data['homeUrl'] = $this->homeUrl;
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

        $this->load->view('services/header', $data);
        $this->load->view('services/' . $page, $data);
        $this->load->view('services/footer', $data);
    }

    private function home()
    {
        $data['title'] = "Home";

        // $serviceSelected = "Home Care";
        // if ($this->input->get("category")) {
        //     $serviceSelected = $this->input->get("category");
        // }
        $data['serviceSelected'] = $this->selectedCategory;

        $subCategorySelected = "all";
        if ($this->input->get("subcategory")) {
            $subCategorySelected = $this->input->get("subcategory");
        }
        $data['subCategorySelected'] = $subCategorySelected;

        $subCategories = $this->gm->getRawQueryData("SELECT SERVICE.service_id as id, SERVICE.name as name FROM mservices SERVICE LEFT JOIN mservices PARENTSERVICE ON PARENTSERVICE.service_id = SERVICE.parent_id WHERE SERVICE.status=1 AND PARENTSERVICE.name='" . $this->selectedCategory . "'");

        $services = [];
        for ($i = 1; $i < 20; $i++) {
            $services[] = array("id" => $i, "name" => "vendor " . $i, "location" => "location " . $i, "rating" => rand(0, 50) / 10);
        }

        $data['subCategories'] = $subCategories;
        $data['services'] = $services;
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
