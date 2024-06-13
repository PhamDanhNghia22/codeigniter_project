<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrderController extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('OrderModel');
    }

    public function list(){
        $this->data['shippings']= $this->OrderModel->Get_shipping();
        $this->load->view('Admin/Header');
        $this->load->view('Admin/Order/list',$this->data);
        $this->load->view('Admin/Footer');
    }

    public function detail($id){
        $this->data['order'] = $this->OrderModel->Get_OneOrder($id);
        $this->data['OrderDetail'] = $this->OrderModel->Get_OrderDetail($id);
        $this->load->view('Admin/Header');
        $this->load->view('Admin/Order/Detail',$this->data);
        $this->load->view('Admin/Footer');

    }
}