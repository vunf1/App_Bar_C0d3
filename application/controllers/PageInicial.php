<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageInicial extends CI_Controller {


	    function __construct() {
	        parent::__construct();
	        $this->output->set_header('Access-Control-Allow-Origin: *');
					$this->load->helper('url');
					$this->load->helper('html');
	        //$this->load->model('tionmodel');
	         //$this->load->database();
	        //Load them in the constructor


	    }


	public function index()
	{
		$this->load->view('pagina_inicial');
	}




}