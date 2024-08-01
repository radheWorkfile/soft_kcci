<?php
class Admin_Advertisement_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function save_data($data) {
        return $this->db->insert('advertisement',$data);
    }

    public function all_data() {
        return $this->db->select('*')->order_by('advertisement.id',"DESC")->get('advertisement')->result_array();
    }

    public function get_data($id) {
        return $this->db->select('*')->where('id',$id)->get('advertisement')->row_array();
    }

    public function delete_data($val) {
        if($val) {
            $this->db->where('id',$val);
            $del = $this->db->delete('advertisement');
            if($del) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

}
?>