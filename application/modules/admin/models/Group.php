<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Group extends MY_Model {

    public function __construct() {
      $this->db->order_by("id","desc");
        parent::__construct();
    }
}
