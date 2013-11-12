<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$this->load->view('welcome_message');
	}

	public function test(){
		$this->load->library('email');

		$this->email->from('your@example.com', 'Your Name');
		$this->email->to('dekarvn@gmail.com'); 

		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');	

		$this->email->send();

		echo $this->email->print_debugger();
	}

	public function rsvp_submit(){
		$attending = $this->input->post('attending');
		$this->load->library('email');
		$this->email->from('dekarvn@gmail.com', 'Minh Duc Nguyen - Wedding Email Specialist');
		$this->email->to($this->config->item('admin_email')); 
		$this->email->cc('dekarvn@gmail.com'); 

		$this->email->subject('A New RSVP!');

		$msg = '';
		foreach($attending['guests'] as $guest){
			$msg .= '- '.$guest['name']. ($guest['isChild']? ' - child' : '') ."\n";
		}
		mail('dekarvn@gmail.com', 'A New RSVP', $msg);
		$msg .='Diet Req: '.$attending['diet'];

		$this->email->message($msg);	
		$this->email->send();
		echo $this->email->print_debugger();
	}
}