<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Contact_model extends CI_Model

{
  public function getqueries()
  {
    $this->db->select('*');
    $this->db->from('queries');
    $query = $this->db->get();
    $result = $query->result();        
    return $result;
  }

        public function addcontact($data){
          if($this->db->insert('queries',$data))
          {
              return $this->db->insert_id();           
          }
          else
          {
              return false;
          }

      }

      public function contactget($contact_id)
      {
          $this->db->select('*');
          $this->db->from('queries');
          $this->db->where('id', $contact_id);
          $query= $this->db->get();
          return $query->row();

      }

      public function editcontact($queries,$id){
        $this->db->where('id', $id);
        $this->db->update('queries', $queries);
        return True;
    }

    public function deleterow($Contact_id){
      $this->db->where('id', $Contact_id);
        $this->db->delete('queries');
        return true; 
       
    }

}

?> 