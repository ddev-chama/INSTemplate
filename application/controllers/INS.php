<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class INS extends CI_Controller {
	public function index()
	{
		$data = array();
		$data["page_select"] = "home";
		$data["content"] = $this->load->view('home',$data,TRUE);
		$this->load->view('Template/index',$data);
	}
	
	public function service(){
		$data = array();
		$data["page_select"] = "service";
		$data["content"] = $this->load->view('service',$data,TRUE);
		$this->load->view('Template/index',$data);
	}
	public function about()
	{
		$data = array();
		$data["page_select"] = "about";
		$data["content"] = $this->load->view('about',$data,TRUE);
		$this->load->view('Template/index',$data);
	}
	public function blog()
	{
		$data = array();
		$data["page_select"] = "blog";
		$data["content"] = $this->load->view('blog',$data,TRUE);
		$this->load->view('Template/index',$data);
	}
	public function contact()
	{
		$data = array();
		$data["page_select"] = "contact";
		$data["content"] = $this->load->view('contact',$data,TRUE);
		$this->load->view('Template/index',$data);
	}
	public function product()
	{
		$data = array();
		$data["page_select"] = "product";
		$data["content"] = $this->load->view('product',$data,TRUE);
		$this->load->view('Template/index',$data);
	}
}
?>