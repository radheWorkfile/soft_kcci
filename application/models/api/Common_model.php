<?php
class Common_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }


    function save_data($table, $val)
    {
        return $this->db->insert($table, $val);
    }

    function all_data($table)
    {
        return $this->db->order_by('id', 'DESC')->get($table)->result_array();
    }

    function all_data_con($table,$data)
    {
        return $this->db->where($data)->get($table)->result_array();
    }

    function get_data($table, $data)
    {
        return $this->db->where($data)->get($table)->row_array();
    }

    function get_data_con($table,$data)
    {
        return $this->db->where($data)->get($table)->result_array();
    }

    function update_data($table, $data)
    {
        $this->db->where('id', $data['id']);
        return $this->db->update($table, $data);
    }

    function del_data($val)
    {
        if ($val) {
            $this->db->where('id', $val['id']);
            $query = $this->db->delete($val['table']);
            if ($query) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    function chageStatus($value)
    {
        $this->db->where('id', $value['id'])->update($value['table'], array('status' => $value['status']));
    }

    public function count_all($table, $where = "1=1")
    {
        $this->db->from($table);
        $this->db->where($where);

        return $this->db->count_all_results();
    }

    
}
