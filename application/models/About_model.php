<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class About_model extends CI_Model
{
    public function getAboutInfo()
    {
        $this->db->select('*');
        $this->db->from('about');
        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }

    public function insert($aboutUsInfo)
    {
        $this->db->insert('about', $aboutUsInfo);
        return $this->db->insert_id();
    }

    public function editabout($aboutInfo,$id){
        $this->db->where('id', $id);
        $this->db->update('about', $aboutInfo);
        return True;
    }

    public function getaboutInfoById($about_id)
    {
        $this->db->select('*');
        $this->db->from('about');
        $this->db->where('id', $about_id);
        $query= $this->db->get();
        return $query->row();

    }

    public function deleterow($about_id)
    {
        $this->db->where('id', $about_id);
        $this->db->delete("about");
        return true;             
    }

    public function getcontentInfo($about_id){
        $this->db->select('*');
        $this->db->from('about');
        $this->db->where('id',$about_id);
        $query=$this->db->get();
        return $query->row();

    }

    public function fixedcontentedit($aboutcontent,$about_id){
        $this->db->where('id',$about_id);
        $this->db->update('about', $aboutcontent);
        return True;
    
    }

    public function fixedabout(){
        $this->db->select('*');
        $this->db->from('about');
        $query= $this->db->get();        
        return $query->row();

    }
    
    
}
?>