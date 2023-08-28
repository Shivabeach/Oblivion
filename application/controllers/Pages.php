<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$data["title"] = "Oblivion";
		$data["header"] = "Page One";
		$data["content"] = "pages/prime";
		$this->load->view("template/template", $data);

	}

}

/* End of file Pages.php */
/* Location: ./application/controllers/Pages.php */