<?php 
class Admin_Tender_model extends CI_Model {

    public function __construct() {
        parent:: __construct();
    }

    public function save_data($data) {
        return $this->db->insert('tender',$data);
    }

    public function all_data() {
        return $this->db->select('*')->order_by('tender.id',"DESC")->get('tender')->result_array();
    }

    public function get_data($id) {
        return $this->db->select('*')->where('id',$id)->get('tender')->row_array();
    }

    public function update_data($data) {
        $this->db->where('id',$data['id']);
        $this->db->update('tender',$data);

    }

    function update_document($val)
    {
        $q = $this->db->select('doc')->where('id', $val['id'])->get('tender');
        if ($q->num_rows() > 0) {
            $imgName = $q->row_array();
            print_r($imgName);die;
            unlink("./uploads/tender/" . basename($imgName['doc']));
        }

        $this->db->where('id', $val['id']);
        if ($val) {
            $query = $this->db->update('tender', $val);
            if ($query) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function delete_data($val) {
        if($val) {
            $this->db->where('id',$val);
            $del = $this->db->delete('tender');
            if($del) {
                return true;
            } else {
                return false;
            }
        }else {
            return false;
        }
    }
}
?>