<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		//loading url helper
		$this->load->helper('url');
		//loading the model
		$this->load->model('Homepage_model');
	}
	public function index()
	{

		$this->load->view('Header');

		$data['variable'] = 90;

		$this->load->view('Main', $data);


		$this->load->view('navbar');
		$this->load->view('gamehosting');

		$this->load->view('Footer');
	}
}