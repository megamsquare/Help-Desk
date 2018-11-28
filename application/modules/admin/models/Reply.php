<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Reply extends MY_Model {

    public function __construct() {
        $this->table_name = 'reply';
        $this->primary_key = 'reply_id';
        parent::__construct();
    }
}
