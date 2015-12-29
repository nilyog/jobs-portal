<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$result['users'] = $this->users_model->get_user_details();
		//var_dump($result);
		$this->load->view('index',$result);
	}

	public function personal_info(){
		$this->load->view('personalInfo');	
	}
	public function add_new_user(){

	/*	$this->input->post();    // Catch values form url via POST Method
		$this->input->get();                 // Catch values form url via GET Method
		$this->input->get_post();      // Search data first for POST then for GET. */

		  $form_data = $this->input->post();
	      // or just the username:
	     // $username = $this->input->post("username");
		  var_dump($form_data);

	      $data = array(
			'fname' => $this->input->post('fname'),
			'lname' => $this->input->post('lname') ,
	    	'gender' => $this->input->post('gender'),
	    	'address' => $this->input->post('address') );
	     var_dump($data);
	    	$this->users_model->add_new_user($data);
    		redirect(base_url(),'refresh');
	}


	
/*
	// Show form in view page i.e view_page.php
	public function form_show() {
	$this->load->view("view_form");
	}

	// When user submit data on view page, Then this function store data in array.
	public function data_submitted() {
	$data = array(
	'user_name' => $this->input->post('u_name'),
	'user_email_id' => $this->input->post('u_email')
	);

	// Show submitted data on view page again.
	$this->load->view("view_form", $data);
	} */
}
