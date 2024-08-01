<?php 
class Admin_Founder_model extends CI_Model {

    public function __construct() {
        parent:: __construct();
    }

    public function save_data($data)
    { 
        return $this->db->insert('founder',$data);
    }

    public function get_all_founder() {
        return $this->db->select('*')->order_by('founder.id',"DESC")->get('founder')->result_array();
    }

    public function get_founder($id) {
        return $this->db->select('*')->where('id',$id)->get('founder')->row_array();
    }

    public function delete_founder($val) {
        if($val){
            $this->db->where('id',$val);
            $del=$this->db->delete('founder');
            if($del) {
                return true;
            } else {
                return false;
            }
        }else{
            return false;
        }
    }

}
?>