<?php 
class Admin_Package_model extends CI_Model {

    public function __construct() {
        parent:: __construct();
    }

    public function save_data($data)
    { 
        return $this->db->insert('package',$data);
    }

    public function all_data() {
        return $this->db->select('*')->get('package')->result_array();
    }

    public function get_data($id) {
        return $this->db->select('*')->where('id',$id)->get('package')->row_array();
    }

    public function update_data($val) {
        $this->db->where('id',$val['id']);
        $this->db->update('package',$val);
    }

    public function delete_data($val) {
        if($val) {
            $this->db->where('id',$val);
            $del = $this->db->delete('package');
            if($del) {
                return true;
            } else{
                return false;
            }
        } else{
            return false;
        }
    }

}

?>