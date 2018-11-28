<?php

class Admin extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model(array('admin/ticket'));
    }

    public function index() {
        $opentickets = $this->ticket->get_open_ticket();

        $data['opentickets'] = $opentickets;
        $data["page_title"] = "Home";
        $data['page'] = $this->config->item('ticket_template_dir_admin') . "dashboard";
        $this->load->view($this->_container, $data);
    }

}
