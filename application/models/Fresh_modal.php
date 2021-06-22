<?php
class Fresh_modal extends CI_Model {
	public function checkLogin($email, $password) {
           //query the table 'users' and get the result count
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$query = $this->db->get('admin');
		$result =  $query->num_rows();
		if ($result>0) {
			return  $query->row();
		}else{
			return false;
		}
	}
	function list($table) {
          //$this->db->where('status','pending');
          $this->db->order_by('id', 'DESC');  //actual field name of id
          $query=$this->db->get($table);
          return $query->result();

      }
function register($data, $table){
      	$insert = $this->db->insert($table,$data); 
      	if ($insert) {
      		return $this->db->insert_id();
			  return 1;	
      	}else{
      		return 0;
      	}   
		 
}

  function delete($id,$table){
      	$this->db->where('id', $id);
      	return $this->db->delete($table );

      }


       function get($id, $table){ 

      	$this->db->where('id' , $id);
      	$query=$this->db->get($table);
      	return $query->row();
      }
      function update($id,$data,$table=''){
      	$this->db->where('id',$id);
      	return  $query= $this->db->update($table,$data);
      }
  
}
?>