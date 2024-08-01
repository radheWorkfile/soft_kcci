<?php 
class Admin_Rural_model extends CI_Model {

    public function __construct() {
        parent:: __construct();
    }

    public function save_rural($data) {
        return $this->db->insert('rural',$data);
    }

    public function get_data($id) {
        return $this->db->select('*')->where('map',$id)->get('rural')->result_array();
    }

    public function all_data() {
        return $this->db->select('*')->where('')->get('rural')->result_array();
    }

    public function get_district() {
        return $this->db->select('*')->where(array('map' => 0,'rural_type' => 1))->get('rural')->result_array();
    }

    public function get_block() {
        return $this->db->select('*')->where(array('rural_type' => 2))->get('rural')->result_array();
    }

    public function get_constituency() {
        return $this->db->select('*')->where(array('rural_type' => 3))->get('rural')->result_array();
    }

    public function view_block() {
        return $this->db->select('*')->where('rural_type',2)->get('rural')->result_array();
    }

    public function view_constituency() {
        return $this->db->select('*')->where('rural_type',3)->get('rural')->result_array();
    }
    public function view_panchayat() {
        return $this->db->select('*')->where('rural_type',4)->get('rural')->result_array();
    }
    public function view_booth_no() {
        return $this->db->select('*')->where('rural_type',5)->get('rural')->result_array();
    }
    public function view_booth_name() {
        return $this->db->select('*')->where('rural_type',6)->get('rural')->result_array();
    }

    public function delete_district($val){
        if($val) {
            $this->db->where('id',$val);
            $del = $this->db->delete('rural');
            if($del) {
                return true;
            } else{
                return false;
            }
        } else{
            return false;
        }
    }

    public function delete_block($val){
        if($val) {
            $this->db->where('id',$val);
            $del = $this->db->delete('rural');
            if($del) {
                return true;
            } else{
                return false;
            }
        } else{
            return false;
        }
    }

    public function delete_constituency($val){
        if($val) {
            $this->db->where('id',$val);
            $del = $this->db->delete('rural');
            if($del) {
                return true;
            } else{
                return false;
            }
        } else{
            return false;
        }
    }

    public function delete_panchayat_name($val){
        if($val) {
            $this->db->where('id',$val);
            $del = $this->db->delete('rural');
            if($del) {
                return true;
            } else{
                return false;
            }
        } else{
            return false;
        }
    }

    public function delete_booth_no($val){
        if($val) {
            $this->db->where('id',$val);
            $del = $this->db->delete('rural');
            if($del) {
                return true;
            } else{
                return false;
            }
        } else{
            return false;
        }
    }

    public function delete_booth_name($val){
        if($val) {
            $this->db->where('id',$val);
            $del = $this->db->delete('rural');
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