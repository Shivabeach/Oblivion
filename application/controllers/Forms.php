<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forms extends CI_Controller {

	public function updater()
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
      $this->load->view("pages/updates");
      echo "success";
		}
	}
}

/* End of file Forms.php */
/* Location: ./application/controllers/Forms.php */