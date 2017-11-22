<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_TestView extends CI_Controller {

	public function index()
	{
		$this->load->view('index.html');
	}

	public function login_admin()
	{
		$this->load->view('admin-login.html');
	}

	public function home_admin()
	{
		$this->load->view('admin-home.html');
	}

	public function f1_admin()
	{
		$this->load->view('admin-list_admin.html');
	}

	public function f2_admin()
	{
		$this->load->view('admin-input_admin.html');
	}

	public function f3_admin()
	{
		$this->load->view('admin-list_project.html');
	}

	public function f4_admin()
	{
		$this->load->view('admin-input_project.html');
	}
}
