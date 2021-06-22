<?php
class Dependent_model extends CI_Model
{
  function fetch_country()
  {
    $this->db->order_by("name", "ASC");
    $query = $this->db->get("copy_country");
    return $query->result();
  }

  function fetch_state($country_id)
  {
    $this->db->where('copy_country_id', $country_id);
    $this->db->order_by('state_name', 'ASC');
    $query = $this->db->get('copy_state');
    $output = '<option value="">Select State</option>';
    foreach ($query->result() as $row) {
      $output .= '<option value="' . $row->id . '">' . $row->state_name . '</option>';
    }
    return $output;
  }

  function fetch_city($state_id)
  {
    $this->db->where('copy_state_id', $state_id);
    $this->db->order_by('city_name', 'ASC');
    $query = $this->db->get('copy_city');
    $output = '<option value="">Select City</option>';
    foreach ($query->result() as $row) {
      $output .= '<option value="' . $row->city_id . '">' . $row->city_name . '</option>';
    }
    return $output;
  }

  /*%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% INSERT_ DATA  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%*/



  function country($data, $table)
  {
    $insert = $this->db->insert($table, $data);
    if ($insert) {
      return $this->db->insert_id();
    } else {
      return false;
    }
  }



  /**%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% COUNTRY_LIST %%%%%%%%%%%%%%%%%%%%%%%%%%%%% */
  function country_list($table)
  {
    //$this->db->where('status','pending');
    $this->db->order_by('id', 'DESC');  //actual field name of id
    $query = $this->db->get($table);
    return $query->result();
  }
  function fetch_copy_country()
  {
    $this->db->order_by("name", "ASC");
    $query = $this->db->get("copy_country");
    return $query->result();
  }



  /*%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%5  STATE_LIST   %%%%%%%%%%%%%%%%%%%%%%%%%%%%*/

  // function state_list($table) {
  //   //$this->db->where('status','pending');
  //   $this->db->order_by('id', 'DESC');  //actual field name of id
  //   $query=$this->db->get($table);
  //   return $query->result();


  function state_list()
  {
    $this->db->select('*');
    $this->db->from('copy_country');
    $this->db->join('copy_state', 'copy_state.copy_country_id = copy_country.id');
    //$this->db->join('city', 'city.state_id = state.state_id');
    // $this->db->where('id=country_id');

    $query = $this->db->get();
    return $query->result();
  }


  /*%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%5 CITY_LIST %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%*/

  function fetch_copy_state()
  {
    $this->db->order_by("state_name", "ASC");
    $query = $this->db->get("copy_state");
    return $query->result();
  }

 

  function city_list()
  {
    $this->db->select('*');
    $this->db->from('copy_country');
    $this->db->join('copy_state', 'copy_state.copy_country_id = copy_country.id');
    $this->db->join('copy_city', 'copy_city.copy_state_id = copy_state.id');
    // $this->db->where('id=country_id');

    $query = $this->db->get();
    return $query->result();
  }


  function delete($id, $table)
  {
    $this->db->where('id', $id);
    return $this->db->delete($table);
  }

  function get($id, $table)
  {

    $this->db->where('id', $id);
    $query = $this->db->get($table);
    return $query->row();
  }
  function update($id, $data, $table = '')
  {
    $this->db->where('id', $id);
    return  $query = $this->db->update($table, $data);
  }
}
