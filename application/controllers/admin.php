<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index(){
		$data['admin'] = true;
		$this->load->view('admin', $data);
	}
}