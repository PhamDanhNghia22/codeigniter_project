<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }
    public function dashboard(){
        $this->load->view('Admin/Header');
        $this->load->view('Admin/Home');
        $this->load->view('Admin/Footer');
    }
}