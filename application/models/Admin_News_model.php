<?php 

class Admin_News_model extends CI_Model {

    public function __construct() {
        parent:: __construct();
    }

    public function save_data($data) {
        return $this->db->insert('news',$data);
    }

    public function all_data() {
        return $this->db->select('*')->order_by('news.id',"DESC")->get('news')->result_array();
    }

    public function get_data($id) {
        return $this->db->select('*')->where('id',$id)->get('news')->row_array();
    }

    public function update_data($data) {
        $this->db->where('id',$data['id']);
        $this->db->update('news',$data);
    }

    public function delete_data($val) {
        if($val) {
            $this->db->where('id',$val);
            $del = $this->db->delete('news');
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