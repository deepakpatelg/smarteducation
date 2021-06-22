<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Crude extends CI_Controller {
 public function __construct(){
  parent::__construct();
  $this->load->library(['form_validation','session']);
  $this->load->database();
  $this->load->helper('url', 'form');
  $this->load->library('email'); 
  $this->load->model('Crude_model'); 
 
}

  

/*****%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%SIGN_OUT_ADMIN%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%********/
// function logout(){
//  $this->session->unset_userdata('logged_in');
//  redirect('admin/Fresh/');
// }





/*******%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%DISPALY_USER%%%%%%%%%%%%%%%%%%%%%%%%%&******/
public  function banerlist(){
  if ($this->session->userdata('logged_in')) {
   //$this->load->view('admin/disply_user',$user );
   $page = [];

   $page['user']=$this->Crude_model->list('baner');
   $page['contain']='admin/baner_list';
   $this->load->view('admin/dashboard',$page);
 }else{
   redirect('admin/Fresh/');
 }
}







/****%%%%%%%%%%%%%%%%%%%%%%%%%%CREAT_USER%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%********/
function create_baner(){
  if ($this->session->userdata('logged_in')) {
    $page['contain']='admin/baner_create';
    $this->form_validation->set_rules('title', 'titile','required');

    $this->form_validation->set_rules('discription', 'discription','required');
    
    if (empty($_FILES['image']['name']))
    {
     $this->form_validation->set_rules('image', 'image','required');
   }
   if($this->form_validation->run()==false){
     $this->load->view('admin/dashboard',$page);
   }else{
     $formarray=array();
     $formarray['title']=$this->input->post('title');
     $formarray['discription']=$this->input->post('discription');
     
     $config['upload_path'] = './images/';
     $config['allowed_types'] = 'gif|jpg|png';
     $config['max_size'] = 2000;
     $config['max_width'] = 1500;
     $config['max_height'] = 1500;
     $this->load->library('upload', $config);
     if (!$this->upload->do_upload('image')) {
       $error = array('error' => $this->upload->display_errors());
       $this->load->view('admin/baner_create', $error);
     } else {
       $img=$this->upload->data();
       $formarray['image']= $img['file_name'];
     }

     $this->load->model('Crude_model');
     $this->Crude_model->register($formarray,'baner'); 
     $error = array('error' => $this->upload->display_errors());
   //$this->load->view('admin/user_create', $error);
// $this->session_set_fashdata('success' record success);
     redirect('admin/Crude/banerlist'); 
   }
 }else{
  redirect('admin/Fresh/');
}

}





/*%%%%%%%%%%%%%%%%%%%%%%%%%%%% DELETE_USER %%%%%%%%%%%%%%%&&&&&&&&&&&&&&**************/

function delete($id){
 if (empty($id))
 {
   show_404();
 }
 $data['getdata'] = $this->Crude_model->get($id ,'baner');     
 // $users2 = $this->Model_user->delete($id,'user2');
               // delete image
 $a='images/'.$data['getdata']->image;
 unlink($a);
 $users= $this->Crude_model->delete($id ,'baner');
 redirect('admin/Crude/banerlist');
}  






/*&&&%%%%%%%%*%%%%%%%%%%%%%%%%%%%%%%%% UDATE_USER_DATA %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%****/

function edit($id){
  if ($this->session->userdata('logged_in')) {
    $page = [];
    $page['contain']='admin/baner_update';
    $page['getdata'] = $this->Crude_model->get($id ,'baner');
    $this->load->view('admin/dashboard',$page);
  }else{
   redirect('admin/fresh/');
 }
} 
function updaterecord(){
 $id = $this->input->post('id');
 $data['title'] = $this->input->post('title');
 $data['discription'] = $this->input->post('discription');

   // $data['image'] = $this->input->post('image');
 $config['upload_path'] = './images/';
 $config['allowed_types'] = 'gif|jpg|png';
 $config['max_size'] = 2000;
 $config['max_width'] = 1500;
 $config['max_height'] = 1500;
 $this->load->library('upload', $config);
 if (!$this->upload->do_upload('image')) {
   $error = array('error' => $this->upload->display_errors());
   $this->load->view('admin/baner_update', $error);
 } else {
   $img=$this->upload->data();
   $data['image']= $img['file_name'];
 }
 $this->load->model('Crude_model');
   // $this->fresh_modal->update($data,'user_data'); 
   // $error = array('error' => $this->upload->display_errors());
 $this->Crude_model->update($id,$data,'baner');
 redirect('admin/Crude/banerlist/');
}






/**%%%%%%%%%%%%%%%%%%%%%%%%%  SERVICES   *%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%/
/*%%%%%%%%%%%%%%%%%%%%%%%%                 *%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%*/


/*******%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%DISPALY_USER%%%%%%%%%%%%%%%%%%%%%%%%%&******/
public  function service_list(){
  if ($this->session->userdata('logged_in')) {
   //$this->load->view('admin/disply_user',$user );
   $page = [];

   $page['user']=$this->Crude_model->list('services');
   $page['contain']='admin/service_list';
   $this->load->view('admin/dashboard',$page);
 }else{
   redirect('admin/Fresh/');
 }
}







/****%%%%%%%%%%%%%%%%%%%%%%%%%%CREAT_USER%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%********/
function service_create(){
  if ($this->session->userdata('logged_in')) {
    $page['contain']='admin/service_create';
    $this->form_validation->set_rules('title', 'titile','required');

    $this->form_validation->set_rules('discription', 'discription','required');
    
    if (empty($_FILES['image']['name']))
    {
     $this->form_validation->set_rules('image', 'image','required');
   }
   if($this->form_validation->run()==false){
     $this->load->view('admin/dashboard',$page);
   }else{
     $formarray=array();
     $formarray['title']=$this->input->post('title');
     $formarray['discription']=$this->input->post('discription');
     
     $config['upload_path'] = './images/';
     $config['allowed_types'] = 'gif|jpg|png';
     $config['max_size'] = 2000;
     $config['max_width'] = 1500;
     $config['max_height'] = 1500;
     $this->load->library('upload', $config);
     if (!$this->upload->do_upload('image')) {
       $error = array('error' => $this->upload->display_errors());
       $this->load->view('admin/service_create', $error);
     } else {
       $img=$this->upload->data();
       $formarray['image']= $img['file_name'];
     }

     $this->load->model('Crude_model');
     $this->Crude_model->register($formarray,'services'); 
     $error = array('error' => $this->upload->display_errors());
   //$this->load->view('admin/user_create', $error);
// $this->session_set_fashdata('success' record success);
     redirect('admin/Crude/service_list'); 
   }
 }else{
   redirect('admin/Crude/service_create/');
 }

}





/*%%%%%%%%%%%%%%%%%%%%%%%%%%%% DELETE_USER %%%%%%%%%%%%%%%&&&&&&&&&&&&&&**************/

function services_delete($id){
 if (empty($id))
 {
   show_404();
 }
 $data['getdata'] = $this->Crude_model->get($id ,'services');     
 // $users2 = $this->Model_user->delete($id,'user2');
               // delete image
 $a='images/'.$data['getdata']->image;
 unlink($a);
 $users= $this->Crude_model->delete($id ,'services');
 redirect('admin/Crude/service_list');
}  






/*&&&%%%%%%%%*%%%%%%%%%%%%%%%%%%%%%%%% UDATE_USER_DATA %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%****/

function services_edit($id){
  if ($this->session->userdata('logged_in')) {
    $page = [];
    $page['contain']='admin/update_serves';
    $page['getdata'] = $this->Crude_model->get($id ,'services');
    $this->load->view('admin/dashboard',$page);
  }else{
   redirect('admin/Crude/banerlist/');
 }
} 
function services_updaterecord(){
 $id = $this->input->post('id');
 $data['title'] = $this->input->post('title');
 $data['discription'] = $this->input->post('discription');

   // $data['image'] = $this->input->post('image');
 $config['upload_path'] = './images/';
 $config['allowed_types'] = 'gif|jpg|png';
 $config['max_size'] = 2000;
 $config['max_width'] = 1500;
 $config['max_height'] = 1500;
 $this->load->library('upload', $config);
 if (!$this->upload->do_upload('image')) {
   $error = array('error' => $this->upload->display_errors());
  // $this->load->view('admin/services_updaterecord', $error);
 } else {
   $img=$this->upload->data();
   $data['image']= $img['file_name'];
 }
 $this->load->model('Crude_model');
   // $this->fresh_modal->update($data,'user_data'); 
   // $error = array('error' => $this->upload->display_errors());
 $this->Crude_model->update($id,$data,'services');
 redirect('admin/Crude/service_list/');
}




/**%%%%%%%%%%%%%%%%%%%%%%%%%  CONTAIN   *%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%/
/*%%%%%%%%%%%%%%%%%%%%%%%%                 *%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%*/


/*******%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%DISPALY_USER%%%%%%%%%%%%%%%%%%%%%%%%%&******/
public  function contain_list(){
  if ($this->session->userdata('logged_in')) {
   //$this->load->view('admin/disply_user',$user );
   $page = [];

   $page['user']=$this->Crude_model->list('contain');
   $page['contain']='admin/contain_list';
   $this->load->view('admin/dashboard',$page);
 }else{
   redirect('admin/Fresh/');
 }
}







/****%%%%%%%%%%%%%%%%%%%%%%%%%%CREAT_USER%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%********/
function contain_create(){
  if ($this->session->userdata('logged_in')) {
    $page['contain']='admin/contain_create';
    $this->form_validation->set_rules('title', 'titile','required');
    $this->form_validation->set_rules('discription', 'discription','required');

    if($this->form_validation->run()==false){
     $this->load->view('admin/dashboard',$page);
   }else{

    $formarray=array();
    $formarray['title']=$this->input->post('title');
    $formarray['discription']=$this->input->post('discription');
    $this->load->model('Crude_model');
    $this->Crude_model->register($formarray,'contain'); 
     // $error = array('error' => $this->upload->display_errors());
   //$this->load->view('admin/user_create', $error);
// $this->session_set_fashdata('success' record success);
    redirect('admin/Crude/contain_list'); 
  }
}else{

 redirect('admin/Fresh/');
}
}





/*%%%%%%%%%%%%%%%%%%%%%%%%%%%% DELETE_USER %%%%%%%%%%%%%%%&&&&&&&&&&&&&&**************/

function contain_delete($id){
  if ($this->session->userdata('logged_in')) {
   if (empty($id))
   {
     show_404();
   }
   $data['getdata'] = $this->Crude_model->get($id ,'contain');     
 // $users2 = $this->Model_user->delete($id,'user2');
               // delete image
   $a='images/'.$data['getdata']->image;
   unlink($a);
   $users= $this->Crude_model->delete($id ,'contain');
   redirect('admin/Crude/contain_list');
 }  else{
  redirect('admin/Fresh/');
}
}






/*&&&%%%%%%%%*%%%%%%%%%%%%%%%%%%%%%%%% UDATE_USER_DATA %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%****/

function contain_edit($id){
  if ($this->session->userdata('logged_in')) {
    $page = [];
    $page['contain']='admin/update_contaion';
    $page['getdata'] = $this->Crude_model->get($id ,'contain');
    $this->load->view('admin/dashboard',$page);
  }else{
   redirect('admin/Fresh/');
 }
} 
function contain_updaterecord(){
 $id = $this->input->post('id');
 $data['title'] = $this->input->post('title');
 $data['discription'] = $this->input->post('discription');

   // $data['image'] = $this->input->post('image');

 $this->load->model('Crude_model');
   // $this->fresh_modal->update($data,'user_data'); 
   // $error = array('error' => $this->upload->display_errors());
 $this->Crude_model->update($id,$data,'contain');
 redirect('admin/Crude/contain_list/');
}




/**%%%%%%%%%%%%%%%%%%%%%%%%%  TESTMONIAL   *%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%/
/*%%%%%%%%%%%%%%%%%%%%%%%%                 *%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%*/


/*******%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%DISPALY_USER%%%%%%%%%%%%%%%%%%%%%%%%%&******/
public  function testmonial_list(){
  if ($this->session->userdata('logged_in')) {
   //$this->load->view('admin/disply_user',$user );
   $page = [];

   $page['user']=$this->Crude_model->list('testmonial');

   $page['contain']='admin/testmonial_list';
   $this->load->view('admin/dashboard',$page);
 }else{
   redirect('admin/Fresh/');
 }
}







/****%%%%%%%%%%%%%%%%%%%%%%%%%%CREAT_USER%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%********/
function testmonial_create(){
  if ($this->session->userdata('logged_in')) {
    $page['contain']='admin/testmonial_create';
    $this->form_validation->set_rules('title', 'titile','required');

    $this->form_validation->set_rules('discription', 'discription','required');

    $this->form_validation->set_rules('authore_name', 'authore_name','required');
    
    if (empty($_FILES['image']['name']))
    {
     $this->form_validation->set_rules('image', 'image','required');
   }
   if($this->form_validation->run()==false){
     $this->load->view('admin/dashboard',$page);
   }else{
     $formarray=array();
     $formarray['title']=$this->input->post('title');
     $formarray['discription']=$this->input->post('discription');
     $formarray['authore_name']=$this->input->post('authore_name');
     $formarray['datetime']=date('Y-m-d H:i:s');
     // $formarray['update_date']=date('Y-m-d H:i:s');
     
     $config['upload_path'] = './images/';
     $config['allowed_types'] = 'gif|jpg|png';
     $config['max_size'] = 2000;
     $config['max_width'] = 1500;
     $config['max_height'] = 1500;
     $this->load->library('upload', $config);
     if (!$this->upload->do_upload('image')) {
       $error = array('error' => $this->upload->display_errors());
       $this->load->view('admin/testmonial_create', $error);
     } else {
       $img=$this->upload->data();
       $formarray['image']= $img['file_name'];
     }

     $this->load->model('Crude_model');
     $this->Crude_model->register($formarray,'testmonial'); 
     $error = array('error' => $this->upload->display_errors());
   //$this->load->view('admin/user_create', $error);
// $this->session_set_fashdata('success' record success);
     redirect('admin/Crude/testmonial_list'); 
   }
 }else{
   redirect('admin/Crude/testmonial_create/');
 }

}





/*%%%%%%%%%%%%%%%%%%%%%%%%%%%% DELETE_USER %%%%%%%%%%%%%%%&&&&&&&&&&&&&&**************/

function testmonial_delete($id){
 if (empty($id))
 {
   show_404();
 }
 $data['getdata'] = $this->Crude_model->get($id ,'testmonial');     
 // $users2 = $this->Model_user->delete($id,'user2');
               // delete image
 $a='images/'.$data['getdata']->image;
 unlink($a);
 $users= $this->Crude_model->delete($id ,'testmonial');
 redirect('admin/Crude/testmonial_list');
}  






/*&&&%%%%%%%%*%%%%%%%%%%%%%%%%%%%%%%%% UDATE_USER_DATA %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%****/

function testmonial_edit($id){
  if ($this->session->userdata('logged_in')) {
    $page = [];
    $page['contain']='admin/testmonial_update';
    $page['getdata'] = $this->Crude_model->get($id ,'testmonial');
    $this->load->view('admin/dashboard',$page);
  }else{
   redirect('admin/Crude/testmonial_list/');
 }
} 
function testmonial_updaterecord(){
 $id = $this->input->post('id');
 $data['title'] = $this->input->post('title');
 $data['discription'] = $this->input->post('discription');
 $data['authore_name'] = $this->input->post('authore_name');
 $data['update_date']=date('Y-m-d H:i:s');

   // $data['image'] = $this->input->post('image');
 $config['upload_path'] = './images/';
 $config['allowed_types'] = 'gif|jpg|png';
 $config['max_size'] = 2000;
 $config['max_width'] = 1500;
 $config['max_height'] = 1500;
 $this->load->library('upload', $config);
 if (!$this->upload->do_upload('image')) {
   $error = array('error' => $this->upload->display_errors());
  // $this->load->view('admin/services_updaterecord', $error);
 } else {
   $img=$this->upload->data();
   $data['image']= $img['file_name'];
 }
 $this->load->model('Crude_model');
   // $this->fresh_modal->update($data,'user_data'); 
   // $error = array('error' => $this->upload->display_errors());
 $this->Crude_model->update($id,$data,'testmonial');
 redirect('admin/Crude/testmonial_list/');
}


/**%%%%%%%%%%%%%%%%%%%%%%%%%  BLOG   *%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%/
/*%%%%%%%%%%%%%%%%%%%%%%%%                 *%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%*/


/*******%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%DISPALY_USER%%%%%%%%%%%%%%%%%%%%%%%%%&******/
public  function block_list(){

  if ($this->session->userdata('logged_in')) {
   //$this->load->view('admin/disply_user',$user );
   $page = [];

   $page['user']=$this->Crude_model->list('block');
   $page['contain']='admin/block_list';
   $this->load->view('admin/dashboard',$page);
 }else{
   redirect('admin/Fresh/');
 }
}



/****%%%%%%%%%%%%%%%%%%%%%%%%%%CREAT_USER%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%********/
function block_create(){
  if ($this->session->userdata('logged_in')) {
    $page['contain']='admin/block_create';
    $this->form_validation->set_rules('title', 'titile','required');

    $this->form_validation->set_rules('discription', 'discription','required');

    $this->form_validation->set_rules('authore_name', 'authore_name','required');
    
    if (empty($_FILES['image']['name']))
    {
     $this->form_validation->set_rules('image', 'image','required');
   }
   if($this->form_validation->run()==false){
     $this->load->view('admin/dashboard',$page);
   }else{
     $formarray=array();
     $formarray['title']=$this->input->post('title');
     $formarray['discription']=$this->input->post('discription');
     $formarray['authore_name']=$this->input->post('authore_name');
     $formarray['datetime']=date('Y-m-d H:i:s').'<br>';
     
     $config['upload_path'] = './images/';
     $config['allowed_types'] = 'gif|jpg|png';
     $config['max_size'] = 2000;
     $config['max_width'] = 1500;
     $config['max_height'] = 1500;
     $this->load->library('upload', $config);
     if (!$this->upload->do_upload('image')) {
       $error = array('error' => $this->upload->display_errors());
       $this->load->view('admin/block_create', $error);
     } else {
       $img=$this->upload->data();
       $formarray['image']= $img['file_name'];
     }

     $this->load->model('Crude_model');
     $this->Crude_model->register($formarray,'block'); 
     $error = array('error' => $this->upload->display_errors());
   //$this->load->view('admin/user_create', $error);
// $this->session_set_fashdata('success' record success);
     redirect('admin/Crude/block_list'); 
   }
 }else{
   redirect('admin/Crude/block_create/');
 }

}





/*%%%%%%%%%%%%%%%%%%%%%%%%%%%% DELETE_USER %%%%%%%%%%%%%%%&&&&&&&&&&&&&&**************/

function block_delete($id){
 if (empty($id))
 {
   show_404();
 }
 $data['getdata'] = $this->Crude_model->get($id ,'block');     
 // $users2 = $this->Model_user->delete($id,'user2');
               // delete image
 $a='images/'.$data['getdata']->image;
 unlink($a);
 $users= $this->Crude_model->delete($id ,'block');
 redirect('admin/Crude/block_list');
}  






/*&&&%%%%%%%%*%%%%%%%%%%%%%%%%%%%%%%%% UDATE_USER_DATA %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%****/

function block_edit($id){
  if ($this->session->userdata('logged_in')) {
    $page = [];
    $page['contain']='admin/block_update';
    $page['getdata'] = $this->Crude_model->get($id ,'block');
    $this->load->view('admin/dashboard',$page);
  }else{
   redirect('admin/Fresh/');
 }
} 
function block_updaterecord(){
 $id = $this->input->post('id');
 $data['title'] = $this->input->post('title');
 $data['discription'] = $this->input->post('discription');
 $data['authore_name'] = $this->input->post('authore_name');
 $data['update_date']=date('Y-m-d H:i:s');
   // $data['image'] = $this->input->post('image');
 $config['upload_path'] = './images/';
 $config['allowed_types'] = 'gif|jpg|png';
 $config['max_size'] = 2000;
 $config['max_width'] = 1500;
 $config['max_height'] = 1500;
 $this->load->library('upload', $config);
 if (!$this->upload->do_upload('image')) {
   $error = array('error' => $this->upload->display_errors());
  // $this->load->view('admin/services_updaterecord', $error);
 } else {
   $img=$this->upload->data();
   $data['image']= $img['file_name'];
 }
 $this->load->model('Crude_model');
   // $this->fresh_modal->update($data,'user_data'); 
   // $error = array('error' => $this->upload->display_errors());
 $this->Crude_model->update($id,$data,'block');
 redirect('admin/Crude/block_list/');
}


/*%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% company SETTING  *%%%%%%%%%%%%%%%%%%%%%%%%%/


/*******%%%%%%%%%%%%%%%%%%%%%%%%DISPALY_COMPANY_ADDRESS %%%%%%%%%%%%%%%%%%%%%%%%%&******/
public  function company_setting(){
  if ($this->session->userdata('logged_in')) {
   //$this->load->view('admin/disply_user',$user );
   $page = [];

   $page['user']=$this->Crude_model->list('website');
   $page['contain']='admin/company_deteal';
   $this->load->view('admin/dashboard',$page);
 }else{
   redirect('admin/Fresh/');
 }
}





/*%%%%%%%%%%%%%%%%%%%%%%%%%%%% DELETE_USER %%%%%%%%%%%%%%%&&&&&&&&&&&&&&**************/

// function setting_delete($id){
//  if (empty($id))
//  {
//    show_404();
//  }
//  $data['getdata'] = $this->Crude_model->get($id ,'website');     
//  // $users2 = $this->Model_user->delete($id,'user2');
//                // delete image
//  $a='images/'.$data['getdata']->image;
//  unlink($a);
//  $users= $this->Crude_model->delete($id ,'website');
//  redirect('admin/Crude/company_setting');
// }  






/*&&&%%%%%%%%*%%%%%%%%%%%%%%%%%%%%%%%% UDATE_USER_DATA %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%****/

function seting_edit($id){
  if ($this->session->userdata('logged_in')) {
    $page = [];
    $page['contain']='admin/setting_update';
    $page['getdata'] = $this->Crude_model->get($id ,'website');
    $this->load->view('admin/dashboard',$page);
  }else{
   redirect('admin/fresh/');
 }
} 
function setting_updaterecord(){
 $id = $this->input->post('id');
 $data['title'] = $this->input->post('title');
 $data['discription'] = $this->input->post('discription');
 $data['company_name'] = $this->input->post('company_name');
 $data['mobile_number'] = $this->input->post('mobile_number');
 $data['email_adress'] = $this->input->post('email_adress');
 $data['matatage'] = $this->input->post('matatage');
 $data['company_address'] = $this->input->post('company_address');

 $data['facbook'] = $this->input->post('facbook');
 $data['gitup'] = $this->input->post('gitup');
 $data['twiter'] = $this->input->post('twiter');
 $data['dribble'] = $this->input->post('dribble');
 $data['prinrest'] = $this->input->post('prinrest');

   // $data['image'] = $this->input->post('image');
 $config['upload_path'] = './images/';
 $config['allowed_types'] = 'gif|jpg|png';
 $config['max_size'] = 2000;
 $config['max_width'] = 1500;
 $config['max_height'] = 1500;
 $this->load->library('upload', $config);
 if (!$this->upload->do_upload('logo')) {
   $error = array('error' => $this->upload->display_errors());
   $this->load->view('admin/setting_update', $error);
 } else {
   $img=$this->upload->data();
   $data['logo']= $img['file_name'];
 }


$config['upload_path'] = './images/';
 $config['allowed_types'] = 'gif|jpg|png';
 $config['max_size'] = 2000;
 $config['max_width'] = 1500;
 $config['max_height'] = 1500;
 $this->load->library('upload', $config);
 if (!$this->upload->do_upload('favicon_icon')) {
   $error = array('error' => $this->upload->display_errors());
   $this->load->view('admin/setting_update', $error);
 } else {
   $icon=$this->upload->data();
   $data['favicon_icon']= $icon['file_name'];
 }

 $this->load->model('Crude_model');
   // $this->fresh_modal->update($data,'user_data'); 
   // $error = array('error' => $this->upload->display_errors());
 $this->Crude_model->update($id,$data,'website');
 redirect('admin/Crude/company_setting/');
}



/****%%%%%%%%%%%%%%%%%%%%% DISPLAY_CONTACT_DETEAL %%%%%%%%%%%%%%%%%%%%%*/

public  function contact_deteal(){
  if ($this->session->userdata('logged_in')) {
   //$this->load->view('admin/disply_user',$user );
   $page = [];
   $page['user']=$this->Fresh_modal->list('contact');
   $page['contain']='admin/contect_deteal';
   $this->load->view('admin/dashboard',$page);
 }else{
   redirect('admin/Fresh/');
 }
}

public  function about(){
  if ($this->session->userdata('logged_in')) {
   //$this->load->view('admin/disply_user',$user );
   $page = [];
   $page['user']=$this->Fresh_modal->list('about');
   $page['contain']='admin/about_data';
   $this->load->view('admin/dashboard',$page);
 }else{
   redirect('admin/Fresh/');
 }
}


function edit_about($id)
    {
        if ($this->session->userdata('logged_in')) {
            $page = [];
            $page['contain'] = 'admin/update_about';
            $page['getdata'] = $this->Fresh_modal->get($id, 'about');
            $this->load->view('admin/dashboard', $page);
        } else {
            redirect('admin/fresh/add_user/');
        }
    }
    function update_about()
    {
        $id = $this->input->post('id');
        $data['title'] = $this->input->post('title');
        $data['about'] = $this->input->post('about');
        
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;
        $config['max_width'] = 1500;
        $config['max_height'] = 1500;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('admin/update_about', $error);
        } else {
            $img = $this->upload->data();
            $data['image'] = $img['file_name'];
        }
        $this->load->model('fresh_modal');
        // $this->fresh_modal->update($data,'user_data'); 
        // $error = array('error' => $this->upload->display_errors());
        $this->fresh_modal->update($id, $data, 'about');
        redirect('admin/crude/about');
    }

    public  function gallery_display(){

      if ($this->session->userdata('logged_in')) {
       //$this->load->view('admin/disply_user',$user );
       $page = [];
    
       $page['user']=$this->Crude_model->list('gallery');
       $page['contain']='admin/gallery_display';
       $this->load->view('admin/dashboard',$page);
     }else{
       redirect('admin/Fresh/');
     }
    }
    
    
    
    /****%%%%%%%%%%%%%%%%%%%%%%%%%%CREAT_USER%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%********/
    function gallery(){
      if ($this->session->userdata('logged_in')) {
        $page['contain']='admin/gallery_create';

        $this->form_validation->set_rules('name', 'name','required');
        $this->form_validation->set_rules('title', 'titile','required');
    
        $this->form_validation->set_rules('discription', 'discription','required');
    
        
        
        if (empty($_FILES['image']['name']))
        {
         $this->form_validation->set_rules('image', 'image','required');
       }
       if($this->form_validation->run()==false){
         $this->load->view('admin/dashboard',$page);
       }else{
         $formarray=array();
         $formarray['title']=$this->input->post('title');
         $formarray['discription']=$this->input->post('discription');
         $formarray['name']=$this->input->post('name');
        // $formarray['datetime']=date('Y-m-d H:i:s').'<br>';
         
         $config['upload_path'] = './images/';
         $config['allowed_types'] = 'gif|jpg|png';
         $config['max_size'] = 2000;
         $config['max_width'] = 1500;
         $config['max_height'] = 1500;
         $this->load->library('upload', $config);
         if (!$this->upload->do_upload('image')) {
           $error = array('error' => $this->upload->display_errors());
           $this->load->view('admin/gallery_create', $error);
         } else {
           $img=$this->upload->data();
           $formarray['image']= $img['file_name'];
         }
    
         $this->load->model('Crude_model');
         $this->Crude_model->register($formarray,'gallery'); 
         $error = array('error' => $this->upload->display_errors());
       //$this->load->view('admin/user_create', $error);
    // $this->session_set_fashdata('success' record success);
         redirect('admin/Crude/gallery_display'); 
       }
     }else{
       redirect('admin/Crude/gallery/');
     }
    
    }
    
    
    
    
    
    /*%%%%%%%%%%%%%%%%%%%%%%%%%%%% DELETE_USER %%%%%%%%%%%%%%%&&&&&&&&&&&&&&**************/
    
    function gallery_delete($id){
     if (empty($id))
     {
       show_404();
     }
     $data['getdata'] = $this->Crude_model->get($id ,'gallery');     
     // $users2 = $this->Model_user->delete($id,'user2');
                   // delete image
     $a='images/'.$data['getdata']->image;
     unlink($a);
     $users= $this->Crude_model->delete($id ,'gallery');
     redirect('admin/Crude/gallery_display');
    }  
    
    
    
}
?>
