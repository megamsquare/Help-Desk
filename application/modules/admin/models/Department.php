<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Department extends MY_Model {

    public function __construct() {
        $this->table_name = 'department';
        $this->primary_key = 'id';
        $this->db->order_by('id','desc');
        parent::__construct();
    }
}
