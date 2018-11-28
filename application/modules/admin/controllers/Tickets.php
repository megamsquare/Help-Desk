<?php

class Tickets extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model(array('admin/department'));
        $this->load->model(array('admin/ticket'));
        $this->load->model(array('admin/reply'));
        $this->load->model(array('admin/category'));
    }

    public function index() {
        $tickets = $this->ticket->get_tickets_by_user_id($this->ion_auth->user()->row()->id);
        $categories = $this->category->get_all();


        $data['categories'] = $categories;
        $data['tickets'] = $tickets;
        $data['page'] = $this->config->item('ticket_template_dir_admin') . "ticket/ticket_list";
        $this->load->view($this->_container, $data);
    }

    public function view($id) {

        $ticket = $this->ticket->get_by_id($id);
        $department = $this->department->get_all();
        $reply = $this->ticket->get_replies($id);

        $data['departments'] = $department;
        $data['replies'] = $reply;
        $data['users'] = $this->ion_auth->user()->row();
        $data['ticket'] = $ticket;
        $data['page'] = $this->config->item('ticket_template_dir_admin') . "ticket/ticket_view";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        if ($this->input->post('user_id')) {
            $data['user_id'] = $this->input->post('user_id');
            $data['dept_id'] = $this->input->post('dept_id');
            $data['subject'] = $this->input->post('subject');
            $data['message'] = $this->input->post('message');
            $data['priority'] = $this->input->post('priority');

            $this->ticket->insert($data);

            redirect('/tickets', 'refresh');
        }

        $department = $this->department->get_all();
        $categories = $this->category->get_all();

        $data['users'] = $this->ion_auth->user()->row();
        $data['categories'] = $categories;
        $data['departments'] = $department;
        $data['page'] = $this->config->item('ticket_template_dir_admin') . "ticket/ticket_create";
        $this->load->view($this->_container, $data);
    }

    // public function edit($id) {
    //     if ($this->input->post('user_id')) {
    //         $data['user_id'] = $this->input->post('user_id');
    //         $data['dept_id'] = $this->input->post('dept_id');
    //         $data['email'] = $this->input->post('email');
    //         $data['subject'] = $this->input->post('subject');
    //         $data['message'] = $this->input->post('message');
    //         $data['priority'] = $this->input->post('priority');
    //         $this->ticket->update($data, $id);
    //
    //         redirect('/tickets', 'refresh');
    //     }
    //
    //     $ticket = $this->ticket->get($id);
    //     $department = $this->department->get_all();
    //
    //     $data['users'] = $this->ion_auth->user()->row();
    //     $data['departments'] = $department;
    //     $data['ticket'] = $ticket;
    //     $data['page'] = $this->config->item('ticket_template_dir_admin') . "ticket/ticket_edit";
    //     $this->load->view($this->_container, $data);
    // }

    public function change($id) {
        if ($this->input->post('status')) {
            $data['status'] = $this->input->post('status');
            $this->ticket->update($data, $id);

            redirect('/tickets', 'refresh');
        }

        $ticket = $this->ticket->get($id);

        $data['users'] = $this->ion_auth->user()->row();
        $data['ticket'] = $ticket;
    }

    public function reply() {
        if ($this->input->post('user_id')) {
            $data['user_id'] = $this->input->post('user_id');
            $data['ticket_id'] = $this->input->post('ticket_id');
            $data['message'] = $this->input->post('message');

            $this->reply->insert($data);

            redirect('/tickets', 'refresh');
        }
    }

    // public function delete($id) {
    //     $this->product->delete($id);
    //
    //     redirect('/tickets', 'refresh');
    // }

}
