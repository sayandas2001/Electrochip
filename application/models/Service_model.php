<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Service_model extends CI_Model{
    
    public function getservice(){
        $this->db->select('*');
        $this->db->from('service');
        $query=$this->db->get();
        $result = $query->result();        
        return $result;

    }

    public function addservice($data){
        if($this->db->insert('service',$data))
        {
            return $this->db->insert_id();           
        }
        else
        {
            return false;
        }

    }

    public function serviceget($service_id){
        $this->db->select('*');
        $this->db->from('service');
        $this->db->where('id',$service_id);
        $query= $this->db->get();
        return $query->row();
    }

      public function editservice($serviceInfo,$service_id)
      {
        $this->db->where('id', $service_id);
           $this->db->update('service', $serviceInfo); 
           return TRUE;
      }

      public function deleteInfo($service_id)
    {
        $this->db->where('id', $service_id);
        $this->db->delete("service");
        return true;             
    }
           

}
?>


