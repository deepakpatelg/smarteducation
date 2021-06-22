<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shopingcart extends CI_Controller {

	public function __construct()
	{
	parent::__construct();
	//Load Library and model.
	$this->load->library('cart');
	$this->load->model('cart_model');
	}

	public function index()
	{
		//Get all data from database
		$data['products'] = $this->cart_model->get_all();
		//send all product data to "shopping_view", which fetch from database.
		$this->load->view('shopingcart/shoping_page',$data);
	}



	function add()
	{
	// Set array for send data.
	$insert_data = array(
				'id' => $this->input->post('id'),
				'name' => $this->input->post('name'),
				'price' => $this->input->post('price'),
				'image' => $this->input->post('image'),
				'qty' => 1
				);
	// This function add items into cart.
	$this->cart->insert($insert_data);
	echo $fefe = count($this->cart->contents());
	// This will show insert data in cart.
	}

	


	function remove() {
	$rowid = $this->input->post('rowid');
	// Check rowid value.
	if ($rowid==="all"){
	// Destroy data which store in session.
		$this->cart->destroy();
	}else{
	// Destroy selected rowid in session.
	$data = array(
			'rowid' => $rowid,
			'qty' => 0
			);
	// Update cart data, after cancel.
	$this->cart->update($data);
	}
	echo $fefe = count($this->cart->contents());
	// This will show cancel data in cart.
	
	}


	

	function update_cart(){
	// Recieve post values,calcute them and update
	$rowid = $_POST['rowid'];
	$price = $_POST['price'];
	$amount = $price * $_POST['qty'];
	$qty = $_POST['qty'];

	$data = array(
		'rowid' => $rowid,
		'price' => $price,
		'amount' => $amount,
		'qty' => $qty
		);
	$this->cart->update($data);
	echo $data['amount'];
	}

	function billing_view(){
	// Load "billing_view".
	$this->load->view('shopingcart/billing_view');
	}

	public function save_order()
	{
	// This will store all values which inserted from user.
	$customer = array(
	'name' => $this->input->post('name'),
	'email' => $this->input->post('email'),
	'address' => $this->input->post('address'),
	'phone' => $this->input->post('phone')
	);
	// And store user information in database.
	$cust_id = $this->cart_model->insert_customer($customer);
	$order = array(
	'date' => date('Y-m-d'),
	'customerid' => $cust_id
	);
	$ord_id = $this->cart_model->insert_order($order);
	if ($cart = $this->cart->contents()):
	foreach ($cart as $item):
	$order_detail = array(
	'orderid' => $ord_id,
	'productid' => $item['id'],
	'quantity' => $item['qty'],
	'price' => $item['price']
	);

	// Insert product imformation with order detail, store in cart also store in database.

	$cust_id = $this->cart_model->insert_order_detail($order_detail);
	endforeach;
	endif;

	$this->cart->destroy();

	// After storing all imformation in database load "billing_success".
	$this->load->view('shopingcart/billing_success');
	}



	public function opencart()
    {
        $data['cart']  = $this->cart->contents();
        $this->load->view("shopingcart/cart_modal", $data);
    }


/*%%%%%%%%%%%%%%%%%%55%%  SHOPING_CART_ADMINPANEL  %%%%%%%%%%%%%%%%%%%%%%/*/
            /*&&&&&&&&&&&&___________&&&&&&&&&&&&&*/

/*%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% DISPALY_PRODUCT %%%%%%%%%%%%%%%%%%%%%%%%%&******/
public  function shoping_list(){
	if ($this->session->userdata('logged_in')) {
	 //$this->load->view('admin/disply_user',$user );
	 $page = [];
  
	 $page['user']=$this->Cart_model->list('products');
	 $page['contain']='shopingcart/product_list';
	 $this->load->view('admin/dashboard',$page);
   }else{
	 redirect('admin/Fresh/');
   }
  }
  
  
  
  
  
  
  
  /****%%%%%%%%%%%%%%%%%%%%%%%%%%CREAT_USER%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%********/
  function product_create(){
	if ($this->session->userdata('logged_in')) {
	  $page['contain']='shopingcart/product_create';
	  $this->form_validation->set_rules('name', 'name','required');
  
	  $this->form_validation->set_rules('price', 'price','required');
	  
	  if (empty($_FILES['image']['name']))
	  {
	   $this->form_validation->set_rules('image', 'image','required');
	 }
	 if($this->form_validation->run()==false){
	   $this->load->view('admin/dashboard',$page);
	 }else{
	   $formarray=array();
	   $formarray['name']=$this->input->post('name');
	   $formarray['price']=$this->input->post('price');
	   
	   $config['upload_path'] = './images/';
	   $config['allowed_types'] = 'gif|jpg|png';
	   $config['max_size'] = 2000;
	   $config['max_width'] = 1500;
	   $config['max_height'] = 1500;
	   $this->load->library('upload', $config);
	   if (!$this->upload->do_upload('image')) {
		 $error = array('error' => $this->upload->display_errors());
		 $this->load->view('shopingcart/Shopingcart/product_create', $error);
	   } else {
		 $img=$this->upload->data();
		 $formarray['image']= $img['file_name'];
	   }
  
	   $this->load->model('Cart_model');
	   $this->Crude_model->register($formarray,'products'); 
	   $error = array('error' => $this->upload->display_errors());
	 //$this->load->view('admin/user_create', $error);
  // $this->session_set_fashdata('success' record success);
	   redirect('shopingcart/shoping_list'); 
	 }
   }else{
	redirect('admin/Fresh/');
   }
  
  }
  
  
  
  
  
  /*%%%%%%%%%%%%%%%%%%%%%%%%%%%% DELETE_USER %%%%%%%%%%%%%%%&&&&&&&&&&&&&&**************/
  
  function product_delete($id){
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
  
  function product_edit($id){
	if ($this->session->userdata('logged_in')) {
	  $page = [];
	  $page['contain']='admin/update_serves';
	  $page['getdata'] = $this->Crude_model->get($id ,'services');
	  $this->load->view('admin/dashboard',$page);
	}else{
	 redirect('admin/Crude/banerlist/');
   }
  } 
  function product_updaterecord(){
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
  
  
  


	}