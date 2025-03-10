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

	public function changes()
	{
		$data = [
			"computer" => trim($this->input->post("computer")),
			"Kbase" 	 => trim($this->input->post("Kbase")),
			"reason"   => trim($this->input->post("reason")),
			"date" 		 => trim($this->input->post("date"))
		];
		$this->form_validation->set_rules('computer', 'Computer required', 'required');
		$this->form_validation->set_rules('Kbase', 'Cost required', 'required');
		$this->form_validation->set_rules('date', 'Date required', 'required');
		$this->form_validation->set_rules('reason', 'reason required', 'required|min_length[10]');

		if($this->form_validation->run() === FALSE) {
      echo validation_errors();
      echo "error";
      }else {
      $this->db->insert("changes", $data);
      // $this->load->view("pages/updates");
      echo "success";
    }
   }

}

/* End of file Pages.php */
/* Location: ./application/controllers/Pages.php */