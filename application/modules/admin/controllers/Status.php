<?php

class Status extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model(array('admin/ticket'));
        $this->load->model(array('admin/department'));
        $this->load->model(array('admin/reply'));
        $this->load->model(array('admin/category'));
        $this->load->model(array('admin/trail'));
    }
    public function index() {
        //$tickets = $this->ticket->get_all();
        $tickets = $this->ticket->get_tickets_by_dept_id($this->ion_auth->user()->row()->dept_id);

        $data['tickets'] = $tickets;
        $data['users'] = $this->ion_auth->user()->row();
        $data['page'] = $this->config->item('ticket_template_dir_admin') . "status/status_list1";
        $this->load->view($this->_container, $data);
    }

    public function adminstatus() {
        $tickets = $this->ticket->get_all();
        $categories = $this->category->get_all();


        $data['categories'] = $categories;
        $data['tickets'] = $tickets;
        $data['users'] = $this->ion_auth->user()->row();
        $data['page'] = $this->config->item('ticket_template_dir_admin') . "status/status_list";
        $this->load->view($this->_container, $data);
    }


    public function viewstatus($id) {

        $ticket = $this->ticket->get_by_id($id);
        $department = $this->department->get_all();
        $reply = $this->ticket->get_replies($id);

        $data['departments'] = $department;
        $data['replies'] = $reply;
        $data['users'] = $this->ion_auth->user()->row();
        $data['ticket'] = $ticket;
        $data['page'] = $this->config->item('ticket_template_dir_admin') . "status/status_view";
        $this->load->view($this->_container, $data);
    }

    public function change($id) {
        if ($this->input->post('status')) {
            $data['status'] = $this->input->post('status');
            $this->ticket->update($data, $id);

            $data = [];
            $data['userdetails'] = $this->input->post('user_id');
            $data['actions'] = 'Change Ticket Status';
            $data['memo'] = $this->input->post('status');
            $this->trail->insert($data);

          if ($this->is_admin){
            redirect('/adminstatus', 'refresh');
          }else{
            redirect('/status', 'refresh');
          }

        }

        $ticket = $this->ticket->get($id);

        $data['users'] = $this->ion_auth->user()->row();
        $data['ticket'] = $ticket;
    }

    public function statusreport() {

      $subtype = $this->input->post('subject');  //get warehouse
      $startDate= $this->input->post('startDate');  //get start date
      $endDate= $this->input->post('endDate'); // get end date

         //var_dump($this->input->post()); die();
         //if(!empty($subtype && $startDate && $endDate)) // check if form field not empty
        //{
          $data['tickets']=$returnReport=$this->ticket->searchtickets($subtype,$startDate,$endDate);
            //var_dump($returnReport); die();
        //}

        $data['page'] = $this->config->item('ticket_template_dir_admin') . "status/status_report";
        $this->load->view($this->_container, $data);

    }

    public function reply() {
        if ($this->input->post('user_id')) {
            $data['user_id'] = $this->input->post('user_id');
            $data['ticket_id'] = $this->input->post('ticket_id');
            $data['message'] = $this->input->post('message');

            $this->reply->insert($data);

            if ($this->is_admin){
              redirect('/adminstatus', 'refresh');
            }else{
              redirect('/status', 'refresh');
            }
          }
    }

}
