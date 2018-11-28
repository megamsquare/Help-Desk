<?php

class Departments extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $group = 'admin';

        if (!$this->ion_auth->in_group($group))
        {
            $this->session->set_flashdata('message', 'You must be an administrator to view the page.');
            redirect('admin/dashboard');
        }

        $this->load->model(array('admin/department'));
        $this->load->model(array('admin/trail'));
    }

    public function index() {
        $department = $this->department->get_all();

        $data['departments'] = $department;
        $data['current_page'] = 'departments';
        $data['page'] = $this->config->item('ticket_template_dir_admin') . "department/department_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        if ($this->input->post('dept_name')) {
            $data['dept_name'] = $this->input->post('dept_name');
            $data['dept_company'] = $this->input->post('dept_company');
            $data['dept_group'] = $this->input->post('dept_group');
            $this->department->insert($data);

            $data = [];
            $data['userdetails'] = $this->input->post('user_id');
            $data['actions'] = 'Create Department';
            $data['memo'] = $this->input->post('dept_name');
            $this->trail->insert($data);

            redirect('/departments', 'refresh');
        }

        $data['users'] = $this->ion_auth->user()->row();
        $data['current_page'] = 'createdepartment';
        $data['page'] = $this->config->item('ticket_template_dir_admin') . "department/department_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {
        if ($this->input->post('dept_name')) {
            $data['dept_name'] = $this->input->post('dept_name');
            $data['dept_company'] = $this->input->post('dept_company');
            $data['dept_group'] = $this->input->post('dept_group');
            $this->department->update($data, $id);

            $data = [];
            $data['userdetails'] = $this->input->post('user_id');
            $data['actions'] = 'Edit Department';
            $data['memo'] = $this->input->post('dept_name');
            $this->trail->insert($data);

            redirect('/departments', 'refresh');
        }

        $department = $this->department->get($id);

        $data['users'] = $this->ion_auth->user()->row();
        $data['departments'] = $department;
        $data['current_page'] = 'departments';
        $data['page'] = $this->config->item('ticket_template_dir_admin') . "department/department_edit";
        $this->load->view($this->_container, $data);
    }

    public function delete($id) {
        $this->department->delete($id);

        redirect('/departments', 'refresh');
    }

}
