<?php

class Categories extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model(array('admin/category'));
        $this->load->model(array('admin/department'));
        $this->load->model(array('admin/trail'));
    }

    public function index() {
        $categories = $this->category->get_all();

        $data['categories'] = $categories;
        $data['page'] = $this->config->item('ticket_template_dir_admin') . "category/categories_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        if ($this->input->post('name')) {
            $data['name'] = $this->input->post('name');
            $data['dept_id'] = $this->input->post('dept_id');
            $this->category->insert($data);

            $data = [];
            $data['userdetails'] = $this->input->post('user_id');
            $data['actions'] = 'Create Category';
            $data['memo'] = $this->input->post('name');
            $this->trail->insert($data);

            redirect('/categories', 'refresh');
        }

        $department = $this->department->get_all();

        $data['users'] = $this->ion_auth->user()->row();
        $data['departments'] = $department;
        $data['page'] = $this->config->item('ticket_template_dir_admin') . "category/categories_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {
        if ($this->input->post('name')) {
            $data['name'] = $this->input->post('name');
            $data['user_id'] = $this->input->post('user_id');
            $data['dept_id'] = $this->input->post('dept_id');
            $this->category->update($data, $id);

            $data = [];
            $data['userdetails'] = $this->input->post('user_id');
            $data['actions'] = 'Edited Category';
            $data['memo'] = $this->input->post('name');
            $this->trail->insert($data);

            redirect('/admin/categories', 'refresh');
        }

        $category = $this->category->get($id);
        $department = $this->department->get_all();

        $data['users'] = $this->ion_auth->user()->row();
        $data['departments'] = $department;
        $data['category'] = $category;
        $data['page'] = $this->config->item('ticket_template_dir_admin') . "category/categories_edit";
        $this->load->view($this->_container, $data);
    }

    // public function delete($id) {
    //     $this->category->delete($id);
    //
    //     $data = [];
    //     $data['userdetails'] = $this->input->post('user_id');
    //     $data['actions'] = 'Deleted Category';
    //     $data['memo'] = $this->input->post('name');
    //     $this->trail->insert($data);
    //
    //     redirect('/admin/categories', 'refresh');
    // }

}
