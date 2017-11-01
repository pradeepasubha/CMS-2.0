<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function dash()
	{
		$this->load->view('menus/menu');
	}

	public function Open()
	{
		$this->load->view('menus/open-canteen');
	}

	public function art()
	{
		$this->load->view('menus/art-canteen');
	}

	public function law()
	{
		$this->load->view('menus/law-canteen');
	}

	public function management()
	{
		$this->load->view('menus/management-canteen');
	}

	public function ucsc()
	{
		$this->load->view('menus/ucsc-canteen');
	}

	public function breakf()
	{
		$this->load->view('menus/breakfast');
	}


	public function lunf()
	{
		$this->load->view('menus/lunch');
	}


	public function dinn()
	{
		$this->load->view('menus/dinner');
	}

	public function login()
	{
		$this->load->view('menus/Register');
	}













}

?>
