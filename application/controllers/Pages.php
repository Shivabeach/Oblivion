<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$data["title"] = "Oblivion";
		$data["header"] = "Oblivion";
		$data["content"] = "pages/prime";
		$this->load->view("template/template", $data);

	}
	public function wilson()
	{
		$data["title"] = "Hober";
		$data["header"] = "Hober Mallow";
		$data["content"] = "pages/mrwilson";
		$this->load->view("template/template", $data);

	}
	public function updates()
	{

		$data["title"] = "Update Records";
		$data["header"] = "Update Records";
		$data["content"] = "pages/updates";
		$this->load->view("template/template", $data);
	}

}

/* End of file Pages.php */
/* Location: ./application/controllers/Pages.php */