<?php 
	class Menu extends CI_Controller{

	
	
	public function index()
	{
		$this->load->view('menu/files/menu');

	
	}

	public function opencanteen()
	{
		$this->load->view('menu/files/opencanteen');

	
	}




}
?>