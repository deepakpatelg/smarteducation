<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dynamic_dependent extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Dependent_model');
  }

  function index()
  {
    $data = [];
    $data['contain'] = 'smarteducation/Dynamic_dependent';

    $data['country'] = $this->Dependent_model->fetch_country();
    $this->load->view('smarteducation/website', $data);
  }

  function fetch_state()
  {

    if ($this->input->post('country_id')) {
      echo $this->Dependent_model->fetch_state($this->input->post('country_id'));
    }
  }

  function fetch_city()
  {
    if ($this->input->post('state_id')) {
      echo $this->Dependent_model->fetch_city($this->input->post('state_id'));
    }
  }
  
/*%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%     COUNTRY     %%%%%%%%%%%%%%%%%%%%%%%%%%*/
  function create_country()
  {
      if ($this->session->userdata('logged_in')) {
  
   
            $page['contain'] = 'admin/country';
            $this->form_validation->set_rules('name', 'name', 'trim|required');
            if ($this->form_validation->run() == false) {
              $this->load->view('admin/dashboard', $page);
          } else {
              $formarray = array();
              $formarray['name'] = $this->input->post('name');
              $this->load->model('Dependent_model');
              $this->Dependent_model->country($formarray, 'copy_country');
             
              //$this->load->view('admin/user_create', $error);
              // $this->session_set_fashdata('success' record success);
              redirect('admin/Dynamic_dependent/country_list');
          }
      } else {
          redirect('admin/Fresh/');
      }
  }
  public  function country_list()
  {
      if ($this->session->userdata('logged_in')) {
          //$this->load->view('admin/disply_user',$user );
          $page = [];

          $page['user'] = $this->Dependent_model->country_list('copy_country');
          $page['contain'] = 'admin/list_city';
          $this->load->view('admin/dashboard', $page);
      } else {
          redirect('admin/Fresh/');
      }
  }
  function delete($id)
    {
        
        $joins = $this-> Dependent_model->delete($id, 'copy_country');
        redirect('admin/Dynamic_dependent/country_list');
    }

    function country_edit($id)
    {
        if ($this->session->userdata('logged_in')) {
            $page = [];
            $page['contain'] = 'admin/update_country';
            $page['getdata'] = $this->Dependent_model->get($id, 'copy_country');
            $this->load->view('admin/dashboard', $page);
        } else {
            redirect('admin/fresh/');
        }
    }
    function country_updaterecord()
    {
        $id = $this->input->post('id');
        $data['name'] = $this->input->post('name');
        
        $this->load->model('Dependent_model');
        
        $this->Dependent_model->update($id, $data, 'copy_country');
        redirect('admin/Dynamic_dependent/country_list/');
    }









    /*&%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%    STATES      %%%%%%%%%%%%%%%%%%%%%%*/

  function state()
  {

    if ($this->session->userdata('logged_in')) {
    $data = [];
    $data['contain'] = 'admin/create_state';

$data['country'] = $this->Dependent_model->fetch_copy_country();

$this->form_validation->set_rules('name', 'name', 'trim|required');
if ($this->form_validation->run() == false) {
  $this->load->view('admin/dashboard', $data); 
} else {
  $formarray = array();
  $formarray['state_name'] = $this->input->post('name');

  $formarray['copy_country_id'] = $this->input->post('country');
  $this->load->model('Dependent_model');
  $this->Dependent_model->country($formarray, 'copy_state');
 
  //$this->load->view('admin/user_create', $error);
  // $this->session_set_fashdata('success' record success);
  redirect('admin/Dynamic_dependent/state_list');
}
} else {
redirect('admin/Fresh/');
}

  }


  
  public  function state_list()
  {
      if ($this->session->userdata('logged_in')) {
          //$this->load->view('admin/disply_user',$user );
          $page = [];

          $page['user'] = $this->Dependent_model->state_list();
          $page['contain'] = 'admin/list_state';
          $this->load->view('admin/dashboard', $page);
      } else {
          redirect('admin/Fresh/');
      }
  }

  function state_delete($id)
  {
      
      $joins = $this-> Dependent_model->delete($id, 'copy_state');
      redirect('admin/Dynamic_dependent/state_list');
  }

  function state_edit($id)
  {
      if ($this->session->userdata('logged_in')) {

      
          $page = [];
          $page['contain'] = 'admin/update_state';
          $page['getdata'] = $this->Dependent_model->get($id,'copy_state');
          $this->load->view('admin/dashboard', $page);
      } else {
          redirect('admin/fresh/');
      }
  }
  function state_updaterecord()
  {
      $id = $this->input->post('id');
      $data['state_name '] = $this->input->post('state_name');
      $data['copy_country_id'] = $this->input->post('copy_country_id');
      
      $this->load->model('Dependent_model');
      
      $this->Dependent_model->update($id, $data, 'copy_state');
      redirect('admin/Dynamic_dependent/state_list/');
  }

  



/****%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%  CREATE_CITY %%%%%%%%%%%%%%%%%%%%%%%%%* */
function create_city()
{

  if ($this->session->userdata('logged_in')) {
  $data = [];
  $data['contain'] = 'admin/create_city';
  $data['country'] = $this->Dependent_model->fetch_country();
$data['state'] = $this->Dependent_model->fetch_copy_state();

$this->form_validation->set_rules('name', 'name', 'trim|required');
if ($this->form_validation->run() == false) {
$this->load->view('admin/dashboard', $data); 
} else {
$formarray = array();
$formarray['city_name'] = $this->input->post('name');

$formarray['copy_state_id'] = $this->input->post('state');
$this->load->model('Dependent_model');
$this->Dependent_model->country($formarray, 'copy_city');

//$this->load->view('admin/user_create', $error);
// $this->session_set_fashdata('success' record success);
redirect('admin/Dynamic_dependent/city');
}
} else {
redirect('admin/Fresh/');
}

}



  function city()
  {

 if ($this->session->userdata('logged_in')) {
      //$this->load->view('admin/disply_user',$user );
      $page = [];
      $page['join'] = $this->Dependent_model->city_list();
      $page['contain'] = 'admin/city';
      $this->load->view('admin/dashboard', $page);
    } else {
      redirect('admin/Fresh/');
    }
  
  }
  function city_delete($id)
  {
      
      $joins = $this-> Dependent_model->delete($id, 'copy_city');
      redirect('admin/Dynamic_dependent/city');
  }

  function city_edit($id)
  {
      if ($this->session->userdata('logged_in')) {

      
          $page = [];
          $page['contain'] = 'admin/update_city';
          $page['getdata'] = $this->Dependent_model->get($id ,'copy_city');
          $this->load->view('admin/dashboard', $page);
      } else {
          redirect('admin/fresh/');
      }
  }
  function city_updaterecord()
  {
      $id = $this->input->post('id');
      $data['city_name '] = $this->input->post('city_name');
      $data['copy_state_id'] = $this->input->post('copy_state_id');
      
      $this->load->model('Dependent_model');
      
      $this->Dependent_model->update($id, $data, 'copy_city');
      redirect('admin/Dynamic_dependent/city/');
  }

}
