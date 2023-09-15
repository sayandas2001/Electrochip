<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class banner_model extends CI_Model
{
    // This function is used to get the user listing count
    function banner_listing()
    {
        $this->db->select('*');
        $this->db->from('banner as BaseTbl');
        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }

    public function addbanner($data)
    {
        if($this->db->insert('banner',$data))
        {
            return $this->db->insert_id();
        }
        else
        {
            return false;
        }
    }

    public function editbanner($bannerInfo, $banner_id)
    {
        $this->db->where('banner_id', $banner_id);
        $this->db->update('banner', $bannerInfo);
        
        return TRUE;
    }

    public function getbannerInfoById($banner_id)
    {
        $this->db->select('*');
        $this->db->from('banner');
        $this->db->where('banner_id', $banner_id);
        $query= $this->db->get();
        return $query->row();
    }

    public function deleteInfo($banner_id)
    {
        $this->db->where('banner_id', $banner_id);
        $this->db->delete("banner");
        return trur;             
    }
}