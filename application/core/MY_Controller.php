<?php if (!defined('BASEPATH'))  exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    var $_container;
    var $_modules;

    function __construct() {
        parent::__construct();
        //Load Base Web Files 
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->helper('typography');

        $this->load->config('ticket');

        // Set container variable
        $this->_container = $this->config->item('ticket_template_dir_public') . "layout.php";
        $this->_modules = $this->config->item('modules_locations');

        log_message('debug', 'Ticket Admin : MY_Controller class loaded');
    }
}