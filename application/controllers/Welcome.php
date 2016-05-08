<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data=array();
		$data['title']='Home';
		$data['category']=1;
		$data['popular_post']=1;
		$data['maincontent']=$this->load->view('home_content','',true);
		$this->load->view('master',$data);
	}
	
	public function general()
	{
		$data=array();
		$data['title']='General';
		$data['category']=1;
		$data['recent_post']=1;
		$data['maincontent']=$this->load->view('general_content','',true);
		$this->load->view('master',$data);
	}
	
	public function button()
	{
		$data=array();
		$data['title']='Button';
		$data['recent_post']=1;
		$data['popular_post']=1;
		$data['maincontent']=$this->load->view('button_content','',true);
		$this->load->view('master',$data);
	}
	
	public function panel()
	{
		$data=array();
		$data['title']='Panel';
		$data['category']=1;
		$data['popular_post']=1;
		$data['maincontent']=$this->load->view('panel_content','',true);
		$this->load->view('master',$data);
	}
	
	public function category1()
	{
		$data=array();
		$data['title']='cagegory1';
		$data['recent_post']=1;
		$data['popular_post']=1;
		$data['maincontent']=$this->load->view('category1_content','',true);
		$this->load->view('master',$data);
	}
}
