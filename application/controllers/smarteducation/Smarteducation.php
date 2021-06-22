<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Smarteducation extends CI_Controller {
 public function __construct(){
  parent::__construct();
  $this->load->library(['form_validation','session']);
  $this->load->database();
  $this->load->helper('url', 'form');
  $this->load->library('email'); 
  //$this->load->model('fresh_modal');   
}




/*******%%%%%%%%%%%%%%%%%%%%%%%%%%%%% HOME_PAGE %%%%%%%%%%%%%%%%%%%%%%%%%%%*********/
public function index(){
  
   $page['contain']='smarteducation/home';
   $this->load->view('smarteducation/website',$page);
}

public function contact_us(){
$page['contain']='smarteducation/contact';
   $this->load->view('smarteducation/website',$page);

}
public function services(){
   $page['contain']='smarteducation/services';
      $this->load->view('smarteducation/website',$page);
   
   }
   public function single_services($id){

      $page = [];
      $page['contain']='smarteducation/single_services';
       $page['abc'] = $this->Crude_model->get($id ,'services');
         $this->load->view('smarteducation/website',$page);
      
      }


public function blog(){
$page['contain']='smarteducation/blog';
   $this->load->view('smarteducation/website',$page);

}
public function single_blog($id){

$page = [];
$page['contain']='smarteducation/single_blog';
 $page['abc'] = $this->Crude_model->get($id ,'block');
   $this->load->view('smarteducation/website',$page);

}
public function about(){
$page['contain']='smarteducation/about';
   $this->load->view('smarteducation/website',$page);

}


public function term_condition(){
   $id = '5';

   $page = [];
$page['contain']='smarteducation/term_conditon';
$page['abc']= $this->Crude_model->get($id,'contain');
   $this->load->view('smarteducation/website',$page);

}


public function privency_policy(){
   $id = '6';
   $page = [];
   $page['contain']='smarteducation/privency_policy';
 $page['abc']= $this->Crude_model->get($id,'contain');
  
      $this->load->view('smarteducation/website',$page);
   
   }

public function disclaimer(){
   $id = '7';

   $page = [];
   $page['contain']='smarteducation/disclaimer';
   $page['abc']= $this->Crude_model->get($id,'contain');
      $this->load->view('smarteducation/website',$page);
   
   }
public function gallery(){
   $page['contain']='smarteducation/gallery';
      $this->load->view('smarteducation/website',$page);
   
   }

/*%%%%%%%%%%%%%%%%%%%%%%%% FRONT_CONTACT_INSERTDATA %%%%%%%%%%%%%%%%%%%%%%%8*/
 function contact_insert (){

$page['contain']='smarteducation/contact';
    $this->form_validation->set_rules('first_name', 'first_name','required');

    $this->form_validation->set_rules('last_name', 'last_name','required');

     $this->form_validation->set_rules('email','email','trim|required|valid_email|is_unique[contact.email]');

  $this->form_validation->set_rules('phone', 'phone','required');

    $this->form_validation->set_rules('comments', 'comments','required');

    if($this->form_validation->run()==false){
   $this->load->view('smarteducation/website',$page);
   }else{
     $formarray=array();

     $formarray['first_name']=$this->input->post('first_name');
     $formarray['last_name']=$this->input->post('last_name');
     $formarray['email']=$this->input->post('email');
     $formarray['number']=$this->input->post('phone');
     $formarray['masage']=$this->input->post('comments');
      $formarray['create_date']=date('Y-m-d H:i:s');

      $this->load->model('Crude_model');
     $this->Crude_model->register($formarray,'contact'); 
     
   //$this->load->view('admin/user_create', $error);
 //$this->session_set_fashdata('success' record success);
     redirect('smarteducation/Smarteducation/contact_us'); 

   }
}

/*%%%%%%%%%%%%%%%%%%%%%%%%%%%% DELETE_CONTACT %%%%%%%%%%%%%%%&&&&&&&&&&&&&&**************/

function contact_delete($id){
 if (empty($id))
 {
   show_404();
 }
 // $data['getdata'] = $this->Crude_model->get($id ,'contact');     
 // // $users2 = $this->Model_user->delete($id,'user2');
 //               // delete image
 // $a='images/'.$data['getdata']->image;
 // unlink($a);
 $users= $this->Crude_model->delete($id ,'contact');
 redirect('admin/Crude/contact_deteal');
}  



}
?>