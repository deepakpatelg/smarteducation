<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ajax extends CI_Controller {
 public function __construct(){
  parent::__construct();
  $this->load->library(['form_validation','session']);
  $this->load->database();
  $this->load->helper('url', 'form');
  $this->load->library('email'); 
  $this->load->model('fresh_modal');   
}
public function register()
	{
		$this->load->view('ajax/ajax_insert');
	}
function create_user(){
//if ($this->session->userdata('logged_in')) {
//$page['contain']='admin/user_create';
    //   $this->form_validation->set_rules('name', 'name','trim|required|min_length[4]|max_length[12]');
    //   $this->form_validation->set_rules('address', 'address','trim|required');
    //   $this->form_validation->set_rules('contact', 'contact','trim|required|min_length[6]|max_length[12]');
    //   $this->form_validation->set_rules('gender', 'gender');
    //   $this->form_validation->set_rules('country', 'country','trim|required');
    //   $this->form_validation->set_rules('email','email','trim|required|valid_email|is_unique[user_data.email]');
    //   $this->form_validation->set_rules('password', 'password','trim|required');
    //   $this->form_validation->set_rules('cpassword', 'cPassword','trim|required|matches[password]');
    //   if (empty($_FILES['image']['name']))
    //   {
    //    $this->form_validation->set_rules('image','image',);
    //  }
    //  if($this->form_validation->run()==false){
    //    $this->load->view('ajax/ajax_insert');
    //  }else{
       
       $formarray=array();
       
       $formarray['name']=$this->input->post('name');
       $formarray['address']=$this->input->post('address');
       $formarray['contact_no']=$this->input->post('contact');
       $formarray['gander']=$this->input->post('gender');
       $formarray['city']=$this->input->post('country');
       $formarray['email']=$this->input->post('email');
       $formarray['password']= md5($this->input->post('password'));
       $config['upload_path'] = './images/';
       $config['allowed_types'] = 'gif|jpg|png';
       $config['encrypt_name'] = TRUE;
       $config['max_size'] = 2000;
       $config['max_width'] = 1500;
       $config['max_height'] = 1500;
       $this->load->library('upload', $config);
       if (!$this->upload->do_upload('image')) {
         $error = array('error' => $this->upload->display_errors());
         $this->load->view('ajax/ajax_insert', $error);
       } else {
         $img=$this->upload->data();
         $formarray['image']= $img['file_name'];
       }
       $this->load->model('fresh_modal');
     $result = $this->fresh_modal->register($formarray,'user_data'); 
      // $error = array('error' => $this->upload->display_errors());
     //$this->load->view('admin/user_create', $error);
  //$this->session_set_fashdata('success' record success);
      // redirect('admin/fresh/add_user'); 
      if($result)
		{
		echo  "success";	
		}
		else
		{
		echo  0;	
		} 
}
//    }else{
//      redirect('admin/Fresh/');
//    }
  
 // }
}
