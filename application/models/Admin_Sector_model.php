<?php 

class Admin_Sector_model extends CI_Model{

    public function __construct(){
        parent:: __construct();
    }

    public function add_sector($data) {
        return $this->db->insert('sector',$data);
    }

    public function all_data() {
        return $this->db->select('*')->order_by('sector.id','DESC')->get('sector')->result_array();
    }

    public function get_data($val){
        return $this->db->select('*')->where('id',$val)->get('sector')->row_array();
    }

    public function update_sector_data($val) {
        $this->db->where('id',$val['id']);
        $this->db->update('sector',$val);
    }

    public function delete_sector_data($val){
        if($val) {
            $this->db->where('id',$val);
            $del = $this->db->delete('sector');
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