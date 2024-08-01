<?php 
class Admin_Business_model extends CI_Model {

    public function __construct() {
        parent:: __construct();
    }

    public function save_data($data) {
        return $this->db->insert('business',$data);
    } 

    public function all_data() {
        $this->db->select('*');
        $query = $this->db->order_by('business.id','DESC')->get('business');
        return $query->result_array();
     }
 
     public function get_data($id) {
        $this->db->select('*,');
        $this->db->where('id',$id);
        $query = $this->db->get('business');
        return $query->row_array();
     }

     public function update_data($data) {
        $this->db->where('id',$data['id']);
        $this->db->update('business',$data);
     }
}

?>