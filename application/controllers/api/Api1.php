<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

// Load the Rest Controller library
require APPPATH . '/libraries/REST_Controller.php';

class Api1 extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('upload');
        $this->load->helper(array('form', 'url'));
        // Load the user model
        $this->load->model('Api_model');
    }

    public function login_post()
    {
        // Get the post data
        $email = $this->post('email');
        $password = $this->post('password');

        // Validate the post data
        if (!empty($email) && !empty($password)) {

            // Check if any user exists with the given credentials
            $con['returnType'] = 'single';
            $con['conditions'] = array(
                'email' => $email,
                'password' => ($password),
                'status' => 1
            );
            $user = $this->Api_model->getRows($con);

            if ($user) {
                // Set the response and exit
                $this->response([
                    'status' => TRUE,
                    'message' => 'User login successful.',
                    'data' => $user
                ], REST_Controller::HTTP_OK);
            } else {
                // Set the response and exit
                //BAD_REQUEST (400) being the HTTP response code
                $this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
            }
        } else {
            // Set the response and exit
            $this->response("Provide email and password.", REST_Controller::HTTP_BAD_REQUEST);
        }
    }


/*%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% USRE_POST %%%%%%%%%%%%%%%%%%%%%%%%%%%*/

    public function user_post()
    {
        // Get the post data
        $first_name = strip_tags($this->post('first_name'));
        $last_name = strip_tags($this->post('last_name'));
        $email = strip_tags($this->post('email'));
        $password = $this->post('password');
        $phone = strip_tags($this->post('phone'));
        // $image = strip_tags($this->post('image'));
        $image = $this->input->post("image");
$image_name = md5(uniqid(rand(), true));
$filename = $image_name . '.' . 'png';
//rename file name with random number
$path = "vehicle_image_upload/".$filename;
//image uploading folder path
//file_put_contents($path . $filename, $image);
// image is bind and upload to respective folde

//$data_insert = array('image'=>$filename);


        // Validate the post data
        if (!empty($first_name) && !empty($last_name) && !empty($email) && !empty($password)) {

            // Check if the given email already exists
            $con['returnType'] = 'count';
            $con['conditions'] = array(
                'email' => $email,
            );
            $userCount = $this->Api_model->getRows($con);

            if ($userCount > 0) {
                // Set the response and exit
                $this->response("The given email already exists.", REST_Controller::HTTP_BAD_REQUEST);
            } else {
                // Insert user data
                $userData = array(
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'email' => $email,
                    'password' => $password,
                    'phone' => $phone,
                    'image'=>$filename

                );
                $insert = $this->Api_model->insert($userData,'api_user1');

                // Check if the user data is inserted
                if ($insert) {
                    // Set the response and exit
                    $this->response([
                        'status' => TRUE,
                        'message' => 'The user has been added successfully.',
                        'data' => $insert
                    ], REST_Controller::HTTP_OK);
                } else {
                    // Set the response and exit
                    $this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
                }
            }
        } else {
            // Set the response and exit
            $this->response("Provide complete user info to add.", REST_Controller::HTTP_BAD_REQUEST);
        }
    }


    /*%%%%%%%%%%%%%%%%%%%%%%%%%%% USRE_GET  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%*/


    public function user_get($id=0)
    {
        // // Returns all the users data if the id not specified,
        // // Otherwise, a single user will be returned.
        // // $con = $id ? array('id' => $id) : '';
         $users = $this->Api_model->getrow($id);

        // // Check if the user data exists
         if (!empty($users)) {
        //     // Set the response and exit
        //     //OK (200) being the HTTP response code
            $this->response($users, REST_Controller::HTTP_OK);
     } else {
        $this->response([
           'status' => FALSE,
                'message' => 'No user was found.'
            ], REST_Controller::HTTP_NOT_FOUND);
         }

    //     if (!empty($id)) {
    //         $data = $this->db->get_where("api_user1", ['id' => $id])->row_array();
    //            $this->response($data, REST_Controller::HTTP_OK);
    //    // $data=array('success'=>"true",'msg'=>"success",'userdata'=>$data);
    //    // echo json_encode($data);
    //      } else {
    //        $data = $this->db->get('api_user1')->result_array();
    //          // $this->response($data, REST_Controller::HTTP_OK);
    //     $data=array('success'=>"true",'msg'=>"success",'userdata'=>$data);
    //     echo json_encode($data);
    //      }
    //      if (empty($id)) {
    //      $this->response([
    //            'status' => FALSE,
    //                 'message' => 'No user was found.'
    //             ], REST_Controller::HTTP_NOT_FOUND);
      
    // }
    }

/*%%%%%%%%%%%%%%%%%%%%%%%%%%%% USER_PUT %%%%%%%%%%%%%%%%%%%%%%%%%%*/

    public function user_put($id)
    {
        $input = $this->put();
        if($input){
        $this->db->update('api_user1', $input, array('id'=>$id));
     
        $this->response(['Product updated successfully.'], REST_Controller::HTTP_OK);
    } else {
//                            //Set the response and exit
 $this->response("Provide at least one user info to update.", REST_Controller::HTTP_BAD_REQUEST);
  }
    }

/**%%%%%%%%%%%%%%%%%%%%%%%%5%%%%%%%%% USER_DELETE %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% */

    public function user_delete($id)
    {
        $this->db->delete('api_user1', array('id'=>$id));
       
        $this->response(['Product deleted successfully.'], REST_Controller::HTTP_OK);
    }
    	
}
