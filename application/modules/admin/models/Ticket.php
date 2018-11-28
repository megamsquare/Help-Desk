<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Ticket extends MY_Model {

    public function __construct() {
      $this->table_name = 'tickets';
      $this->primary_key = 'id';
      //$this->db->order_by("id","desc");
        parent::__construct();
    }

    public function get_all($fields = '', $where = array()) {
        $fields_hack = '*,(SELECT username FROM users ui WHERE ui.id = tickets.user_id ) username,(SELECT name FROM category cg WHERE cg.id = tickets.subject ) name, (SELECT dept_name FROM department dp WHERE dp.id = tickets.dept_id ) dept_name,(SELECT email FROM users ui WHERE ui.id = tickets.user_id ) email';
        return parent::get_all($fields_hack, $where);
    }

    public function get_by_id($primary_key_value, $fields = '') {
        $fields_hack = '*,(SELECT username FROM users ui WHERE ui.id = tickets.user_id ) username,(SELECT name FROM category cg WHERE cg.id = tickets.subject ) name, (SELECT dept_name FROM department dp WHERE dp.id = tickets.dept_id ) dept_name,(SELECT email FROM users ui WHERE ui.id = tickets.user_id ) email';
        return parent::get_by_id($primary_key_value, $fields_hack);
    }

    public function get_replies($id) {
        $this->db->select('reply.date_created,users.username,reply.message');
        $this->db->from('reply');
        $this->db->join('users', 'reply.user_id = users.id','left');
        $this->db->order_by('reply.reply_id','DESC');
        $this->db->where(array('ticket_id' => $id));
        $Q = $this->db->get();
		    return $Q->result();
    }

    public function get_open_ticket() {

        //$this->db->order_by("id","desc");
        $this->db->select("*");
        $this->db->from($this->table_name);
        $this->db->where(array('status','close'));
        $Q = $this->db->get();
		    return $Q->result();
    }

    public function get_tickets_by_user_id($userId) {
      $this->db->select('tickets.id,users.username,department.dept_name,users.email,tickets.subject,tickets.priority,category.name');
      $this->db->from('tickets');
      $this->db->join('users', 'tickets.user_id = users.id','left');
      $this->db->join('category', 'tickets.subject = category.id','left');
      $this->db->join('department', 'tickets.dept_id = department.id','left');
      $this->db->order_by('tickets.user_id', 'DESC');
      $this->db->where(array('tickets.user_id' => $userId));
      $Q = $this->db->get();
      return $Q->result();
    }

    public function get_tickets_by_dept_id($deptId) {
      $this->db->select('tickets.id,users.username,department.dept_name,users.email,tickets.subject,tickets.priority,tickets.status,category.name');
      $this->db->from('tickets');
      $this->db->join('users', 'tickets.user_id = users.id','left');
      $this->db->join('category', 'tickets.subject = category.id','left');
      $this->db->join('department', 'department.id = tickets.dept_id','left');
      $this->db->order_by('tickets.id', 'DESC');
      $this->db->where(array('tickets.dept_id' => $deptId));
      $Q = $this->db->get();
      return $Q->result();
    }

    function searchtickets($subtype,$startDate,$endDate){
        $this->db->select('tickets.id,tickets.date_created,users.username,department.dept_name,users.email,tickets.subject,tickets.priority,tickets.status,category.name');
        $this->db->from($this->table_name);
        $this->db->join('users', 'tickets.user_id = users.id','left');
        $this->db->join('category', 'tickets.subject = category.id','left');
        $this->db->join('department', 'department.id = tickets.dept_id','left');
        $this->db->order_by('tickets.id', 'DESC');
        $this->db->where(array('tickets.subject'=>$subtype,'DATE(tickets.date_created) >='=> $startDate,'DATE(tickets.date_created) <='=>$endDate));
        $Q =$this->db->get();
        return $Q->result();
    }
}
