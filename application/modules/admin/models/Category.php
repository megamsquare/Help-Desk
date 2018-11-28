<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Category extends MY_Model {

    public function __construct() {
        $this->table_name = 'category';
        $this->primary_key = 'id';
        parent::__construct();
    }

    public function get_all($fields = '', $where = array()) {
        $fields_hack = '*,(SELECT dept_name FROM department dp WHERE dp.id = category.dept_id ) dept_name';
        return parent::get_all($fields_hack, $where);
    }
}
