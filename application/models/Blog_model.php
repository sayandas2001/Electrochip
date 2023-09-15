<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model{
    
    public function getblog(){
        $this->db->select('*');
        $this->db->from('blog');
        $query=$this->db->get();
        $result = $query->result();        
        return $result;

    }

    public function addblog($data){
        if($this->db->insert('blog',$data))
        {
            return $this->db->insert_id();           
        }
        else
        {
            return false;
        }

    }

    public function blogget($blog_id){
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->where('id',$blog_id);
        $query= $this->db->get();
        return $query->row();
    }

    public function editblog($blogInfo,$blog_id)
    {
      $this->db->where('id', $blog_id);
         $this->db->update('blog', $blogInfo); 
         return TRUE;
    }

    public function deleteInfo($blog_id)
    {
        $this->db->where('id', $blog_id);
        $this->db->delete("blog");
        return true;             
    }
}


?>