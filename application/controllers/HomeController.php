<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('HomeModel');
	}
	public function index()
	{
		$this->data['categories']= $this->HomeModel->GetCategories();
		$this->data['Newproduct'] = $this->HomeModel->NewProd(); 
		$this->load->view('Clients/Header');
		$this->load->view('Clients/Home',$this->data);
		$this->Footer();
		

	}
	public function allProduct(){
		$this->data['categories']= $this->HomeModel->GetCategories();
		$this->data['Allprod']=$this->HomeModel->Get_AllProduct();
		$this->load->view('Clients/Header');
		$this->load->view('Clients/AllProduct',$this->data);
		$this->Footer();
	}
	public function detailProd($id){
		$this->data['ProdDetail']= $this->HomeModel->ProdDetail($id);
		$this->load->view('Clients/Header');
		$this->load->view('Clients/Detail',$this->data);
		$this->load->view('Clients/Footer');

	}
	public function ProductByCategory($iddm){
		$this->data['categories']= $this->HomeModel->GetCategories();
		$this->data['Category']= $this->HomeModel->GetCategory($iddm);
		$this->data['ProdByCate'] = $this->HomeModel->GetProductByCategory($iddm);
		$this->load->view('Clients/Header');
		$this->load->view('Clients/ProdByCate',$this->data);
		$this->Footer();
	}

	public function ProductDetail($id){
		$this->load->view('Clients/Header');
		$this->load->view('Clients/ProductDetail');
		$this->Footer();
	}

	public function Footer(){
		$this->data['categories']= $this->HomeModel->GetCategories();
		$this->load->view('Clients/Footer',$this->data);
	}
}
