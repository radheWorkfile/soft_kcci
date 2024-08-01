<?php
class ComModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function add_data($table,$data) {
        return $this->db->insert($table,$data);
    }

    public function getAllData($data,$table) {
        return $this->db->select($data)->get($table)->result_array();
        
    }
    public function allMemDatMod()
  {
    $this->db->select('r.*,ind.industeries_name,bus.business_type');
    $this->db->where(array('r.sector'=>18, 'r.status' => 1));
    // $this->db->where(array('r.sector'=>18,'status'=>1));
    $this->db->join('business as bus','bus.id=r.business_type');
    $this->db->join('industeries as ind','ind.id=r.industries');
    $query = $this->db->get('registration as r');
    return $query->result_array();
  }
  public function getLastId()
  {
      return $this->db->select('id')->order_by('id', 'desc')->limit(1)->get('registration')->row_array();
  }

  public function allMemDatMod_mod($id)
  {
    $this->db->select('r.*,ind.industeries_name,bus.business_type');
    $this->db->where(array('r.id' => $id['id'],'r.sector'=>18, 'r.status' => 1));
    $this->db->join('business as bus','bus.id=r.business_type');
    $this->db->join('industeries as ind','ind.id=r.industries');
    $query = $this->db->get('registration as r');
    return $query->row_array();
  }
    public function showAllDataWcon($data,$con,$table) {
        return $this->db->select($data)->where($con)->get($table)->result_array();
        
    }


    public function disData($data,$id,$table)
    {
        return $this->db->select($data)->where($id)->get($table)->row_array();

    }
 
    public function getAData($data,$table) {
        return $this->db->select($data)->get($table)->row_array();
        
    }
    public function getADataWi($data,$id,$table)
    {
        return $this->db->select($data)->where('id', $id)->get($table)->row_array();
    }
      function chageStatus($value)
    {
        $this->db->where('id', $value['id'])->update($value['table'], array('status' => $value['status']));
    }
    public function getDataWj() {
    //    return $this->db->select($data)->join($joiData)->get($table)->result_array();
    // $this->db->select('in.id,in.sector_name,in.industeries_name,in.description,s.sector_name as secNa');
    $this->db->select('in.*,s.sector_name as secNa');
    $this->db->join('sector as s','s.id=in.sector_name');
    $query = $this->db->get('industeries as in');
    return $query->result_array();
       
    }
    public function delete($data,$id,$table)
    {
        return $this->db->select($data)->where($id)->delete($table);
    }

    public function deleteData($data,$id,$table)
    {
        return $this->db->select($data)->where('id',$id['id'])->delete('founder');

    }

    public function update_data($data,$table) {
        $this->db->where('id',$data['id']);
        $this->db->update($table,$data);
     }

     public function founderData()
     {
        echo "hello con";
        die;
     }


}
?>