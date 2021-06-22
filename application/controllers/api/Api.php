<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
//use Restserver\Libraries\REST_Controller;

class Api extends REST_Controller
{

   /**
    * Get All Data from this method.
    *
    * 
    */
   public function __construct()
   {
      parent::__construct();
      $this->load->database();

      /**
       * Get All Data from this method.
       *
       * @return Response
       */
   }
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function user_post()
    {
      $this->form_validation->set_rules('name', 'name','trim|required');
      $this->form_validation->set_rules('password', 'password','trim|required');
     

        $input=[''];
        $input = $this->input->post(); 
        $input['created_date'] = date("Y-m-d H:i:s");
        
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;
        $config['max_width'] = 1500;
        $config['max_height'] = 1500;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
          $error = array('error' => $this->upload->display_errors());
          $this->load->view('admin/user_create', $error);
        } else {
          $img=$this->upload->data();
          $input['image']= $img['file_name'];
        }

        $this->db->insert('api_user',$input);
     
        $this->response(['Product created successfully.'], REST_Controller::HTTP_OK);
    } 
     
   function user_get($id = 0)
   {
      if (!empty($id)) {
         $data = $this->db->get_where("api_user", ['id' => $id])->row_array();
      } else {
        $data = $this->db->where("api_user", ['id' => $id])->result();
      }
     
     
     // $this->response($data, REST_Controller::HTTP_OK);
     $data=array('success'=>"true",'msg'=>"success",'userdata'=>$data);
     echo json_encode($data);
   }
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function user_put($id)
    {
        $input = $this->put();
        $input['updated_date'] = date("Y-m-d H:i:s");
          
        $this->db->update('api_user', $input, array('id'=>$id));
     
        $this->response(['Product updated successfully.'], REST_Controller::HTTP_OK);
    }
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_delete($id)
    {
        $this->db->delete('api_user', array('id'=>$id));
       
        $this->response(['Product deleted successfully.'], REST_Controller::HTTP_OK);
       // $data=array('success'=>"true",'msg'=>"success",'userdata'=>$data);
	        //echo json_encode('delete');
    }

    // function usre_delete() {
    //     $id = $this->delete('id');
    //     $this->db->where('id', $id);
    //     $delete = $this->db->delete('api_user');
    //     if ($delete) {
    //     $this->response(array('status' => 'success'), 201);
    //     } else {
    //     $this->response(array('status' => 'fail', 502));
    //     }
    //     }

}
?>