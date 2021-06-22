 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 class Forgotpassword extends CI_Controller {
   public function __construct(){
    parent::__construct();
    $this->load->library(['form_validation','session']);
    $this->load->database();
    $this->load->helper('url', 'form');
    $this->load->library('email'); 
    $this->load->model('Forgot_model');   
  }



  /******%%%%%%%%%%%%%%%%%%%%%%% FORGOTE_PASSWORD%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%***************/
  
  public function forgot()
  {

    $this->load->view('admin/forgotpass');
  }

  public function resetlink(){
    $email = $this->input->post('email');
        //$result = $this->db->query("select * from  where email ='".$email"'");
    $result = $this->Forgot_model->resetlink($email);
    if (count($result)>0)
    {

      $tokan = rand(1000,9999);
      $message = "Please click reset password link <br> <a href='". base_url('index.php/admin/forgotpassword/reset?tokan=').$tokan."'>Reset Password</a>";
      $this->Forgot_model->update_password($tokan,$email);
      echo $message;
        /*   // $this->Email($result, 'reset password', $message);
          $this->load->library('email');  

          $config['protocol']    = 'smtp';
          $config['smtp_host']    = 'ssl://smtp.gmail.com';
          $config['smtp_port']    = '465';
          $config['smtp_timeout'] = '7';
          $config['smtp_user']    = 'hussainshakir150@gmail.com';
          $config['smtp_pass']    = 'shk12328';
          $config['charset']    = 'utf-8';
          $config['newline']    = "\r\n";
          $config['mailtype'] = 'text'; // or html
          $config['validation'] = TRUE; // bool whether to validate email or not      

        $this->email->initialize($config);

            
            
            $this->email->from('hussainshakir150@gmail.com');
            $this->email->to($email);
            $this->email->cc('another@example.com');
            $this->email->bcc('and@another.com');
            
            $this->email->subject('reset password');
            $this->email->message($message);
            
            $this->email->send();*/
            
          }
          else
          {

           $this->session->set_flashdata('msg', 'Email Not Register');
           redirect(base_url().'index.php/admin/forgotpassword/forgot','refresh');

         }
       }
       public function reset()
       {
         $data['tokan'] = $this->input->get('tokan');

         $_SESSION['tokan']= $data['tokan'];
         $this->load->view('admin/ganeratpwd');
       }





       /***%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%_UPDATE_PASWORD *%%%%%%%%%%%%%%%%%%*/
       

       public function updatepass()

       {
         // $_SESSION['tokan'];
        $tokan= $_SESSION['tokan'];

        $this->form_validation->set_rules('password', 'New Password', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[password]');

        if ($this->form_validation->run()) {
         $data = $this->input->post();
         
         if ($data['password']==$data['cpassword']) {

          $pass = $data['password'];
             //$this->db->query("update admin_login set password='".$data['password']."'where password='".$_SESSION['tokan']."'");
          $this->Forgot_model->set_password($tokan,$pass);
          $this->session->set_flashdata('success', 'Password Reset Successfully');
          redirect(base_url().'index.php/admin/Fresh/','refresh');
        }

      }
      else{
       $this->load->view('admin/ganeratpwd');
     }

   }
 }

 