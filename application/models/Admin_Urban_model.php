<?php 
class Admin_Urban_model extends CI_Model {

    public function __construct() {
        parent:: __construct();
    }

    public function save_urban($data) {
        return $this->db->insert('urban',$data);
    }

    public function get_data($id) {
        return $this->db->select('*')->where('map',$id)->get('urban')->result_array();
    }

    public function get_assembly($id) {
        return $this->db->select('*')->where(array('map' => $id, 'urban_type' => 2))->get('urban')->result_array();
    }
    public function get_muncipal($id) {
        return $this->db->select('*')->where(array('map' => $id, 'urban_type' => 3))->get('urban')->result_array();
    }

    public function all_data() {
        return $this->db->select('*')->where('')->get('urban')->result_array();
    }

    public function get_district() {
        return $this->db->select('*')->where(array('map' => 0,'urban_type' => 1))->get('urban')->result_array();
    }
    public function view_assembly() {
        return $this->db->select('*')->where('urban_type',2)->get('urban')->result_array();
    }
    public function view_muncipal() {
        return $this->db->select('*')->where('urban_type',3)->get('urban')->result_array();
    }
    public function view_wrd_cnslr() {
        return $this->db->select('*')->where('urban_type',4)->get('urban')->result_array();
    }
    public function view_wrd_no() {
        return $this->db->select('*')->where('urban_type',5)->get('urban')->result_array();
    }
    public function view_house_no() {
        return $this->db->select('*')->where('urban_type',6)->get('urban')->result_array();
    }
    public function view_booth_name() {
        return $this->db->select('*')->where('urban_type',7)->get('urban')->result_array();
    }
    public function view_booth_no() {
        return $this->db->select('*')->where('urban_type',8)->get('urban')->result_array();
    }

    public function delete_district($val){
        if($val) {
            $this->db->where('id',$val);
            $del = $this->db->delete('urban');
            if($del) {
                return true;
            } else{
                return false;
            }
        } else{
            return false;
        }
    }

    public function delete_assembly($val){
        if($val) {
            $this->db->where('id',$val);
            $del = $this->db->delete('urban');
            if($del) {
                return true;
            } else{
                return false;
            }
        } else{
            return false;
        }
    }

    public function delete_muncipal($val){
        if($val) {
            $this->db->where('id',$val);
            $del = $this->db->delete('urban');
            if($del) {
                return true;
            } else{
                return false;
            }
        } else{
            return false;
        }
    }

    public function delete_wrd_cnslr($val){
        if($val) {
            $this->db->where('id',$val);
            $del = $this->db->delete('urban');
            if($del) {
                return true;
            } else{
                return false;
            }
        } else{
            return false;
        }
    }

    public function delete_wrd_no($val){
        if($val) {
            $this->db->where('id',$val);
            $del = $this->db->delete('urban');
            if($del) {
                return true;
            } else{
                return false;
            }
        } else{
            return false;
        }
    }

    public function delete_house_no($val){
        if($val) {
            $this->db->where('id',$val);
            $del = $this->db->delete('urban');
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
            $del = $this->db->delete('urban');
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
            $del = $this->db->delete('urban');
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