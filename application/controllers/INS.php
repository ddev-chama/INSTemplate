<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class INS extends CI_Controller {
	public function index()
	{
		$data = array();
		$data["content"] = $this->load->view('home',$data,TRUE);
		$this->load->view('Template/index',$data);
	}
	public function service(){
		$data = array();
		$data["content"] = $this->load->view('service',$data,TRUE);
		$this->load->view('Template/index',$data);
	}
	public function about()
	{
		$data = array();
		$data["content"] = $this->load->view('about',$data,TRUE);
		$this->load->view('Template/index',$data);
	}
	public function blog()
	{
		$data = array();
		$data["content"] = $this->load->view('blog',$data,TRUE);
		$this->load->view('Template/index',$data);
	}
	public function contact()
	{
		$data = array();
		$data["content"] = $this->load->view('contact',$data,TRUE);
		$this->load->view('Template/index',$data);
	}
}
?>