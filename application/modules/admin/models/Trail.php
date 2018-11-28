<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Trail extends MY_Model {

    public function __construct() {
        $this->table_name = 'trail';
        $this->primary_key = 'id';
        parent::__construct();
    }

    public function get_all($fields = '', $where = array()) {
        $fields_hack = '*,(SELECT username FROM users ui WHERE ui.id = trail.userdetails ) username';
        return parent::get_all($fields_hack, $where);
    }
}
