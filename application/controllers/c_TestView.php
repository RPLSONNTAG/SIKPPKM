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
		$this->load->view('/admin/admin-home');
	}

	public function f1_admin()
	{
		$this->load->view('/admin/admin-list_admin');
	}

	public function f2_admin()
	{
		$this->load->view('/admin/admin-input_admin');
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
}
