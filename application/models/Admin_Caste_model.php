<?php 
class Admin_Caste_model extends CI_Model {

    public function __construct() {
        parent:: __construct();
    }

    public function save_caste($data) {
        return $this->db->insert('caste',$data);
    }

    public function get_caste() {
        return $this->db->select('*')->where(array('map' => 0,'caste_type' => 1))->get('caste')->result_array();
    }

    public function get_subcaste($subcaste) {
        return $this->db->select('*')->where(array('map' => $subcaste,'caste_type' => 2))->get('caste')->result_array();
    }

    public function view_subcaste() {
        return $this->db->select('*')->where('caste_type',2)->get('caste')->result_array();
    }

    public function delete_caste($val){
        if($val) {
            $this->db->where('id',$val);
            $del = $this->db->delete('caste');
            if($del) {
                return true;
            } else{
                return false;
            }
        } else{
            return false;
        }
    }

    public function delete_subcaste($val){
        if($val) {
            $this->db->where('id',$val);
            $del = $this->db->delete('caste');
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