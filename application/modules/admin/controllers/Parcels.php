<?php

class Parcels extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('admin/parcel'));
        $this->load->model(array('admin/parcelh'));
    }

    public function index() {
        $tracks = $this->parcel->get_tracks_by_user_id($this->ion_auth->user()->row()->id);
        $data['tracks'] = $tracks;
        $data['page'] = $this->config->item('track_template_dir_admin') . "track/track_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        if ($this->input->post('user_id')) {
            $data['user_id'] = $this->input->post('user_id');
            $data['waybill_num'] = $this->input->post('waybill_num');
            $data['sender_name'] = $this->input->post('sender_name');
            $data['sender_phone'] = $this->input->post('sender_phone');
            $data['sender_address'] = $this->input->post('sender_address');
            $data['receiver_name'] = $this->input->post('receiver_name');
            $data['receiver_phone'] = $this->input->post('receiver_phone');
            $data['receiver_address'] = $this->input->post('receiver_address');
            $data['weight'] = $this->input->post('weight');

            $this->parcel->insert($data);

            $data = [];
            $data['waybill_number'] = $this->input->post('waybill_num');
            $data['message'] = 'Parcel Created';
            $current_date = date('Y');
            $data['month'] = date("m");
            $data['day'] = date("d");
            $data['year'] = date("Y");
            $data['hr'] = date("H");
            $data['mu'] = date("i");
            $data['current'] = date("a");
            $this->parcelh->insert($data);

            redirect('/shipping', 'refresh');
        }

        $data['users'] = $this->ion_auth->user()->row();
        $data['page'] = $this->config->item('track_template_dir_admin') . "track/track_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {
        if ($this->input->post('user_id')) {
            $data['user_id'] = $this->input->post('user_id');
            $data['waybill_num'] = $this->input->post('waybill_num');
            $data['sender_name'] = $this->input->post('sender_name');
            $data['sender_phone'] = $this->input->post('sender_phone');
            $data['sender_address'] = $this->input->post('sender_address');
            $data['receiver_name'] = $this->input->post('receiver_name');
            $data['receiver_phone'] = $this->input->post('receiver_phone');
            $data['receiver_address'] = $this->input->post('receiver_address');
            $data['weight'] = $this->input->post('weight');
            $this->parcel->update($data, $id);
    
            redirect('/shipping', 'refresh');
        }
    
        $parcel = $this->parcel->get($id);
    
        $data['users'] = $this->ion_auth->user()->row();
        $data['parcel'] = $parcel;
        $data['page'] = $this->config->item('track_template_dir_admin') . "track/track_edit";
        $this->load->view($this->_container, $data);
    }

    // public function delete($id) {
    //     $this->product->delete($id);
    //
    //     redirect('/tracks', 'refresh');
    // }

}
