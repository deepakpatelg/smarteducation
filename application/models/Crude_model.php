<?php
class Crude_model extends CI_Model {

  function  list($table) {
          //$this->db->where('status','pending');
          $this->db->order_by('id', 'DESC');  //actual field name of id
          $query=$this->db->get($table);
          return $query->result();

      }
function register($data, $table ){
        $insert = $this->db->insert($table,$data); 
        if ($insert) {
          return $this->db->insert_id();
        }else{
          return false;
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

      // function limit($id, $table){ 

      //   $this->db->where('id' , $id);
      //   $query=$this->db->get($table);
      //   return $query->row();
      // }
  
}
