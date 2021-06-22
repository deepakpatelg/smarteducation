<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Api_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();

        // Load the database library
        $this->load->database();

        $this->userTbl = 'api_user1';
    }

    /*
     * Get rows from the users table
     */
    function getRows($params = array()){
        $this->db->select('*');
        $this->db->from('api_user1');
        
        //fetch data by conditions
        if(array_key_exists("conditions",$params)){
            foreach($params['conditions'] as $key => $value){
                $this->db->where($key,$value);
            }
        }
        
        if(array_key_exists("id",$params)){
            $this->db->where('id',$params['id']);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
                $result = $this->db->count_all_results();    
            }elseif(array_key_exists("returnType",$params) && $params['returnType'] == 'single'){
                $query = $this->db->get();
                $result = ($query->num_rows() > 0)?$query->row_array():false;
            }else{
                $query = $this->db->get();
                $result = ($query->num_rows() > 0)?$query->result_array():false;
            }
        }

// return fetched data
return $result;
    }

    /*&%%%%%%%%%%%%%%%%%%%% GET_ROW %%%%%%%%%%%%%%%%%%%%%%%*/

    public function getrow($id = " ")
    {
        if (!empty($id)) {
            $users = $this->db->get_where('api_user1', array('id' => $id));
            //return the status
            return $users->row_array();
        } else {
            //$users = $this->db->where('api_user1', ['id' => $id])->result_array();

            $users = $this->db->get('api_user1');
            return  $users->result_array();
            //return the status
            //.$users->result_array();
        }
    }



    /*
     * %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% INSERT_DATA %%%%%%%%%%%%%%%%%%%%%
     */
    public function insert($userData, $table)
    {
        //add created and modified date if not exists
        if (!array_key_exists("created", $userData)) {
            $userData['created'] = date("Y-m-d H:i:s");
        }
        if (!array_key_exists("modified", $userData)) {
            $userData['modified'] = date("Y-m-d H:i:s");
        }

        //insert user data to users table
        $insert = $this->db->insert($table, $userData);

        //return the status
        return $insert ? $this->db->insert_id() : false;
    }



    /*
     * %%%%%%%%%%%%%%%%%%%%%%%%%%%% UPDATE_DATA %%%%%%%%%%%%%%%%%%%%%%%%
     */
    // public function update($data, $id){
    //     //add modified date if not exists
    //     if(!array_key_exists('modified', $data)){
    //         $data['modified'] = date("Y-m-d H:i:s");
    //     }

    //     //update user data in users table
    //     $update = $this->db->update($this->userTbl, $data, array('id'=>$id));

    //     //return the status
    //     return $update?true:false;
    // }
    function update($id, $userData, $table = '')
    {
        $this->db->where(array('id' => $id));
        return  $query = $this->db->update($table, $userData);
    }


    
    /*
     * $%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%5555 DELETE_DATA %%%%%%%%%%%%%%%%%%%%%%%%%
     */
    public function delete($id)
    {
        //update user from users table
        $delete = $this->db->delete('api_user1', array('id' => $id));
        //return the status
        return $delete ? true : false;
    }
}
