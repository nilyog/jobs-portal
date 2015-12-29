<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cms_user extends CI_controller
{
	public function index() 
	{
	}

	public function jobs(){
		$this->load->view('jobs');    
	}
	public function recruiters(){
		$this->load->view('recruiters');    
	}
	public function companies(){
		$this->load->view('companies');    
	}

	public function candidate_profile(){
		//$data['galleries'] = $this->gallery_model->get_all();
		//$this->load->view('user/gallery',$data);
		$this->load->view('user/personalInfo');    
	}

	public function candidate_info(){
		$this->load->view('user/candi-info');    
	}
	public function projects(){
		$this->load->view('user/projects');    
	}

	public function education(){
		$this->load->view('user/education');    
	}

	public function aplication_history(){
		$this->load->view('user/aplication-history');    
	}

	public function jobDetails(){
		$this->load->view('user/jobDetails');    
	}


}
