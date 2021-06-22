<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Fresh extends CI_Controller {
 public function __construct(){
  parent::__construct();
  $this->load->library(['form_validation','session']);
  $this->load->database();
  $this->load->helper('url', 'form');
  $this->load->library('email'); 
  $this->load->model('fresh_modal');   
}




/*******%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%LOGIN_ADMIN%%%%%%%%%%%%%%%%%%%%%%%%%%%*********/
public function index(){
  if($this->session->userdata('logged_in', true)) {
   redirect('admin/Fresh/admin_penal');
 }else{
  $this->load->view('admin/admin_login');
}
}





/******%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%CHECH_LOGIN%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%*****///////
function login() { 
 //$this->load->library('Lib');   
  $this->load->model('fresh_modal');
   //get the input fields from login form
  $email = $this->input->post('email');
  $password =$this->input->post('password');
   //send the email pass to query if the user is present or not
  $check_login = $this->fresh_modal->checkLogin($email, $password);

           //if the result is query result is 1 then valid user
  if ($check_login) {
               //if yes then set the session 'loggin_in' as true
   $session_array = [
     'id'=>$check_login->id,
     'name'=>$check_login->name,
     'email'=>$check_login->email,
     'image'=>$check_login->image,
     'logged_in'=>true,
   ];
   $this->session->set_userdata($session_array);
           // $this->session->set_userdata('logged_in', true);
   redirect('admin/Fresh/admin_penal'); 
 } else {  
               //if no then set the session 'logged_in' as false
  $this->session->set_userdata('logged_in', false);

               //and redirect to login page with flashdata invalid msg
  $this->session->set_flashdata('msg', 'Username / Password Invalid');
  redirect('admin/Fresh');            
}
}



/***%%%%%%%%%%%%%%%%%%%%%%%%%%%%%WELCOME_ADMIN%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%&&*****/
public function admin_penal()
{
  if ($this->session->userdata('logged_in')) {
    // $this->load->view('admin/header');
   $page['contain']='admin/contain';
   $this->load->view('admin/dashboard', $page);
 }else{
  redirect('admin/Fresh/');
}
}




/*****%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%SIGN_OUT_ADMIN%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%********/
function logout(){
 $this->session->unset_userdata('logged_in');
 redirect('admin/Fresh/');
}





/*******%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%DISPALY_USER%%%%%%%%%%%%%%%%%%%%%%%%%&******/
public  function add_user(){
  if ($this->session->userdata('logged_in')) {
   //$this->load->view('admin/disply_user',$user );
   $page = [];

   $page['user']=$this->fresh_modal->list('user_data');
   $page['contain']='admin/disply_user';
   $this->load->view('admin/dashboard',$page);
 }else{
   redirect('admin/Fresh/');
 }
}







/****%%%%%%%%%%%%%%%%%%%%%%%%%%CREAT_USER%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%********/
function create_user(){
  if ($this->session->userdata('logged_in')) {
    $page['contain']='admin/user_create';
    $this->form_validation->set_rules('name', 'name','trim|required|min_length[4]|max_length[12]');
    $this->form_validation->set_rules('address', 'address','trim|required');
    $this->form_validation->set_rules('contact_no', 'contact_no','trim|required|min_length[6]|max_length[12]');
    $this->form_validation->set_rules('gender', 'gender');
    $this->form_validation->set_rules('country', 'country','trim|required');
    $this->form_validation->set_rules('email','email','trim|required|valid_email|is_unique[user_data.email]');
    $this->form_validation->set_rules('password', 'password','trim|required');
    $this->form_validation->set_rules('cpassword', 'cPassword','trim|required|matches[password]');
    if (empty($_FILES['image']['name']))
    {
     $this->form_validation->set_rules('image','image','required');
   }
   if($this->form_validation->run()==false){
     $this->load->view('admin/dashboard',$page);
   }else{
     $formarray=array();
     $formarray['name']=$this->input->post('name');
     $formarray['address']=$this->input->post('address');
     $formarray['contact_no']=$this->input->post('contact_no');
     $formarray['gander']=$this->input->post('gender');
     $formarray['city']=$this->input->post('country');
     $formarray['email']=$this->input->post('email');
     $formarray['password']= md5($this->input->post('password'));
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
       $formarray['image']= $img['file_name'];
     }
     $this->load->model('fresh_modal');
     $this->fresh_modal->register($formarray,'user_data'); 
     $error = array('error' => $this->upload->display_errors());
   //$this->load->view('admin/user_create', $error);
// $this->session_set_fashdata('success' record success);
     redirect('admin/fresh/add_user'); 
   }
 }else{
   redirect('admin/Fresh/');
 }

}





/*%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% DELETE_USER %%%%%%%%%%%%%%%&&&&&&&&&&&&&&&&&***********/

function delete($id){
 if (empty($id))
 {
   show_404();
 }
 $data['getdata'] = $this->fresh_modal->get($id ,'user_data');     
 // $users2 = $this->Model_user->delete($id,'user2');
               // delete image
 $a='images/'.$data['getdata']->image;
 unlink($a);
 $users= $this->fresh_modal->delete($id ,'user_data');
 redirect('admin/fresh/add_user');
}  






/*****%^%&&&%%%%%%%%*%%%%%%%%%%%%%%%%%%%%%%%% UDATE_USER_DATA %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%******/

function edit($id){
  if ($this->session->userdata('logged_in')) {
    $page = [];
    $page['contain']='admin/update_user';
    $page['getdata'] = $this->fresh_modal->get($id ,'user_data');
    $this->load->view('admin/dashboard',$page);
  }else{
   redirect('admin/fresh/add_user/');
 }
} 


function updaterecord(){
 $id = $this->input->post('id');
 $data['name'] = $this->input->post('name');
 $data['address'] = $this->input->post('address');
 $data['contact_no'] = $this->input->post('contact_no');
 $data['gander'] = $this->input->post('gender');
 $data['city'] = $this->input->post('country');
 $data['email'] = $this->input->post('email');
 $data['password'] = md5($this->input->post('password'));
   // $data['image'] = $this->input->post('image');
 $config['upload_path'] = './images/';
 $config['allowed_types'] = 'gif|jpg|png';
 $config['max_size'] = 2000;
 $config['max_width'] = 1500;
 $config['max_height'] = 1500;
 $this->load->library('upload', $config);
 if (!$this->upload->do_upload('image')) {
   $error = array('error' => $this->upload->display_errors());
   $this->load->view('admin/update_user', $error);
 } else {
   $img=$this->upload->data();
   $data['image']= $img['file_name'];
 }
 $this->load->model('fresh_modal');
   // $this->fresh_modal->update($data,'user_data'); 
   // $error = array('error' => $this->upload->display_errors());
 $this->fresh_modal->update($id,$data,'user_data');
 redirect('admin/fresh/add_user');
}






/******%%%%%%%%%%%%%%%%%%%%%%%%%%%% ADMIN_PROFILE %%%%%%%%%%%%%%%%%%%%%%%%%%%%**************/

function admin_profile(){  
  if ($this->session->userdata('logged_in')) {
   $data=[];
   $id =  $this->session->userdata('id');
   $data['getdata'] = $this->fresh_modal->get($id ,'admin');
   $data['contain']  ='admin/admin_profil';
   $this->load->view('admin/dashboard', $data);
 }else{
  redirect('admin/Fresh/');
}
}






/**%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% ADMIN_PASSWORD_CHANGE &&%%%%%%%%%%%%%%%%%%%%%%%%%%%****/


public function check_old_password($pwd, $check_pwd){
 if ($this->session->userdata('logged_in')) {
  if (!$pwd) {
    return;
  }
  if ($pwd === $check_pwd) {
    return TRUE;
  }
  else{
    $this->form_validation->set_message('check_old_password', 'Old password is incorrect.');
    return FALSE;
  }
}
}
public function changePassword()
{
  if ($this->session->userdata('logged_in')) {
   $id = $this->session->userdata('id');
   $user = $this->fresh_modal->get($id,'admin');
   $pass =  $user->password;
   $this->form_validation->set_rules('oldpass','OLD PASSWORD','trim|required|callback_check_old_password['.$pass.']');
   $this->form_validation->set_rules('newpass', 'new password', 'required');
   $this->form_validation->set_rules('passconf', 'confirm password', 'required|matches[newpass]');

       // $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

   if($this->form_validation->run() == false) {
    $data=[];
    $id =  $this->session->userdata('id');
    $data['getdata'] = $this->fresh_modal->get($id ,'admin');
    $data['contain']  ='admin/admin_profil';
    $this->load->view('admin/dashboard', $data);      }
    else {
     $id = $this->session->userdata('id');
     $newpass = $this->input->post('newpass');
     $this->fresh_modal->update($id, array('password' => $newpass),'admin');
     redirect('admin/Fresh/admin_profile');
   }
 }
}





/*********************%%%%%%%%%%%%%%%%%%%RESET_PASS_MAIL_SENDING%%%%%%%%%%%********/
// function forgot(){

//   $this->load->view('admin/forgotpass');

// }
// function forgot_pass()
// {
//  if($this->input->post('forgot_pass'))
//  {
//   $email=$this->input->post('email');
//   $que=$this->db->query("select email, password from admin where email='$email'");
//   $row=$que->row();
//   $user_email=$row->email;
//   if((!strcmp($email, $user_email))){
//    echo 'valid email';
//  }else{
 
//    //$pass=$row->password;
//     //$otp=rand(1000 , 9999);
//  $otp = 1234;
//  /*Mail Code*/
//         //$headers = "From: password@example.com";
//  $config = array(
//   'protocol'  => 'smtp',
//   'smtp_host' => 'ssl://smtp.googlemail.com',
//   'smtp_port' => 465,
//   'smtp_user' => 'test@techville.in',
//   'smtp_pass' => 'Mail@987456321',
//   'mailtype'  => 'html',
//   'charset'   => 'utf-8'
// );
//  $this->email->initialize($config);
//  $this->email->set_mailtype("html");
//  $this->email->set_newline("\r\n");
//  $this->email->from('test@techville.in');
//  $this->email->to($user_email);
//  $this->email->subject('Password reset request');
//  $this->email->message('your one time password- $otp.');
// }
// //$this->email->pass($pass);
// //$this->email->header($headers). "\r\n" .
// $this->email->CC('ifany@example.com');
// $this->email->send();
//         //mail($to,$subject,$txt,$headers);
// }
// else{
//   $data['error']="
//   Invalid Email ID !
//   ";
// }

// $this->load->view('admin/fresh/',@$data); 
// }

}
?>  
