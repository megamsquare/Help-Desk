<?php
$this->load->view($this->config->item('ticket_template_dir_public') . 'header');
$this->load->view($this->config->item('ticket_template_dir_public') . 'content');
$this->load->view($this->config->item('ticket_template_dir_public') . 'footer');
