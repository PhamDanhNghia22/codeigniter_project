<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class MailController extends CI_Controller {
	public function __contruct(){
		parent::__contruct();
		
	}
    public function send_mail(){
        $config = array();
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_user'] = 'nghiapdps17489@fpt.edu.vn';
        $config['smtp_pass'] = 'cslmzvnkszrmdfhz';
        $config['smtp_port'] = 465;
        $config['charset'] = 'utf-8';

        $this->email->initialize($config);
        $this->email->set_newline("\r\n");
        $this->email->from('nghiapdps17489@fpt.edu.vn', 'Demo test');
        $this->email->to('pdn22112002@gmail.com');

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

        $this->email->send();
    }

}