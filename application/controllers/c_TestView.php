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

	public function f5_admin()
	{
		$this->load->view('admin-list_prioritas.html');
	}

	public function f6_admin()
	{
		$this->load->view('admin-list_kepuasan.html');
	}

	public function f7_admin()
	{
		$this->load->view('admin-list_report.html');
	}

	public function f8_admin()
	{
		$this->load->view('admin-list_usulan.html');
	}

	public function f9_admin()
	{
		$this->load->view('admin-list_kependudukan.html');
	}

	public function f10_admin()
	{
		$this->load->view('admin-input_kependudukan.html');
	}

	public function f11_admin()
	{
		$this->load->view('admin-halaman_project.html');
	}

	public function f12_admin()
	{
		$this->load->view('admin-halaman_report.html');
	}

	public function f13_admin()
	{
		$this->load->view('admin-halaman_usulan.html');
	}
}
