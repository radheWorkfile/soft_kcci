<?php 
class Admin_Industeries_model extends CI_Model {

    public function __construct() {
        parent:: __construct();
    }

    public function add_industeries($data) {
        return $this->db->insert('industeries',$data);
    }

    public function all_industeries() {
       $this->db->select('i.*,s.sector_name as str_nme');
       $this->db->join('sector as s','i.sector_name=s.id',"inner");
       $query = $this->db->order_by('i.id','DESC')->get('industeries as i');
       return $query->result_array();
    }

    public function get_industeries($id) {
        $this->db->select('i.*,s.sector_name as str_nme');
        $this->db->where('i.id',$id);
        $this->db->join('sector as s','i.sector_name=s.id',"inner");
        $query = $this->db->get('industeries as i');
        return $query->row_array();
    }

    public function update_industeries_data($val) {
        $this->db->where('id',$val['id']);
        $this->db->update('industeries',$val);
    }

    public function delete_industeries($val) {
        if($val) {
            $this->db->where('id',$val);
            $del = $this->db->delete('industeries');
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