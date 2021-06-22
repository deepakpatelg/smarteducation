<?php 

/**
 * 
 */
class Forgot_model extends CI_model
{
    
   
public function resetlink($email)
{
  
       $this->db->where('email',$email);
       $query = $this->db->get('admin_login');
       return $query->result_array();
}
public function update_password($tokan,$email)
{

    $this->db->set('password',$tokan);
    $this->db->where('email',$email);
    $this->db->update('admin_login');
    $query = $this->db->get('admin_login');
     return $query->row();

}
public function set_password($tokan,$pass)
{

    $this->db->set('password',$pass);
    $this->db->where('password',$tokan);
    $this->db->update('admin_login');
    $query = $this->db->get('admin_login');
     return $query->row();

}
   
     
}
