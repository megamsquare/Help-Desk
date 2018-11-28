<?php

class Trails extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model(array('admin/trail'));
    }

    public function index() {
        $trail = $this->trail->get_all();

        $data['trail'] = $trail;
        $data["page_title"] = "Trail";
        $data['page'] = $this->config->item('ticket_template_dir_admin') . "trail/trail_view";
        $this->load->view($this->_container, $data);
    }

}
