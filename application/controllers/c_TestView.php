<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_TestView extends CI_Controller {

	public function index()
	{
		$this->load->view('index.html');
	}

	public function login_admin()
	{
		$this->load->view('admin-login');
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
		$this->load->view('/admin/admin-list_project');
	}

	public function f4_admin()
	{
		$this->load->view('/admin/admin-input_project');
	}

	public function f5_admin()
	{
		$this->load->view('/admin/admin-list_prioritas');
	}

	public function f6_admin()
	{
		$this->load->view('/admin/admin-list_kepuasan');
	}

	public function f7_admin()
	{
		$this->load->view('/admin/admin-list_report');
	}

	public function f8_admin()
	{
		$this->load->view('/admin/admin-list_usulan');
	}

	public function f9_admin()
	{
		$this->load->view('/admin/admin-list_kependudukan');
	}

	public function f10_admin()
	{
		$this->load->view('/admin/admin-input_kependudukan');
	}

	public function f11_admin()
	{
		$this->load->view('/admin/admin-halaman_project');
	}

	public function f12_admin()
	{
		$this->load->view('/admin/admin-halaman_report');
	}

	public function f13_admin()
	{
		$this->load->view('/admin/admin-halaman_usulan');
	}

	public function user_profile()
	{
		$this->load->view('user-profile.html');
	}

	public function user_report()
	{
		$this->load->view('user-reportprogress.html');
	}

	public function user_gantipassword()
	{
		$this->load->view('user-gantipassword.html');
	}

	public function user_halamanproject()
	{
		$this->load->view('user-halamanproject.html');
	}

	public function user_listusulan()
	{
		$this->load->view('user-listusulan.html');
	}

	public function user_login()
	{
		$this->load->view('user-login.html');
	}

	public function user_projectberjalan()
	{
		$this->load->view('user-projectberjalan.html');
	}

	public function user_projectselesai()
	{
		$this->load->view('user-projectselesai.html');
	}

	public function user_register()
	{
		$this->load->view('user-register.html');
	}

	public function user_usulanproject()
	{
		$this->load->view('user-usulanproject.html');
	}
}
