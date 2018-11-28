<?php

class Users extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model(array('admin/department'));

        $group = 'admin';

        if (!$this->ion_auth->in_group($group))
        {
            $this->session->set_flashdata('message', 'You must be an administrator to view the page.');
            redirect('admin/dashboard');
        }
    }

    public function index() {
        $users = $this->ion_auth->users()->result();

        $data['users'] = $users;
        $data['current_page'] = 'users';
        $data['page'] = $this->config->item('ticket_template_dir_admin') . "users/users_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        if ($this->input->post('username')) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $email = $this->input->post('email');
            $group_id = array( $this->input->post('group_id'));

            $additional_data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'username' => $this->input->post('username'),
                'phone' => $this->input->post('phone'),
                'dept_id' => $this->input->post('dept_id'),
            );

            $user = $this->ion_auth->register($username, $password, $email, $additional_data,$group_id);

            if(!$user)
            {
                $errors = $this->ion_auth->errors();
                echo $errors;
                die('done');
            }
            else
            {
                redirect('/users', 'refresh');
            }


        }
        $department = $this->department->get_all();

        $data['groups'] = $this->ion_auth->groups()->result();
        $data['departments'] = $department;
        $data['current_page'] = 'userscreate';
        $data['page'] = $this->config->item('ticket_template_dir_admin') . "users/users_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {
        if ($this->input->post('first_name')) {
            $data['first_name'] = $this->input->post('first_name');
            $data['last_name'] = $this->input->post('last_name');
            $data['email'] = $this->input->post('email');
            $data['password'] = $this->input->post('password');
            $data['phone'] = $this->input->post('phone');
            $data['dept_id'] = $this->input->post('dept_id');
            $group_id = $this->input->post('group_id');

            $this->ion_auth->remove_from_group('', $id);
            $this->ion_auth->add_to_group($group_id, $id);

            $this->ion_auth->update($id, $data);

            redirect('/users', 'refresh');
        }

        $this->load->helper('ui');

        $department = $this->department->get_all();

        $data['groups'] = $this->ion_auth->groups()->result();
        $data['user'] = $this->ion_auth->user($id)->row();
        $data['user_group'] = $this->ion_auth->get_users_groups($id)->row();
        $data['departments'] = $department;
        $data['page'] = $this->config->item('ticket_template_dir_admin') . "users/users_edit";
        $this->load->view($this->_container, $data);
    }

    public function delete($id) {
        $this->ion_auth->delete_user($id);

        redirect('/users', 'refresh');
    }

}
