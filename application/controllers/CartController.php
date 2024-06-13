<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CartController extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model('ProductModel');
		$this->load->model('CategoryModel');
        
	}
    public function index(){
        $this->load->view('Clients/Header');
        $this->load->view('Clients/cart');
		$this->Footer();
    }
	public function addCart()
	{
        if($this->session->has_userdata('LoginUser')){
            $cart =array();
            $idsp = $this->input->post('idsp');
            $quantity = $this->input->post('qty');
            $this->data['ProdDetail']= $this->ProductModel->ProdDetail($idsp);
            foreach($this->data['ProdDetail'] as $prod){
                $cart =array(
                    'id'=>$prod->IDSP,
                    'name'=>$prod->TenSP,
                    'qty'=>$quantity,
                    'price'=>$prod->GiaSP,
                    'options'=>array('image'=>$prod->HinhAnhSP)
                );
            }
            $this->cart->insert($cart);
            return redirect(base_url().'cart');
        }
		return redirect(base_url().'cart');


    }

    public function update_cart(){
        $rowid = $this->input->post('rowid');
        $quantity = $this->input->post('qty');
        $cart =array(
            'rowid'=>$rowid,
            'qty'=>$quantity
        );
        $this->cart->update($cart);

    }

    public function delete_all_cart(){
        $this->cart->destroy();
        return redirect(base_url().'cart','refresh');

    }

    public function delete_item($rowid){
        $this->cart->remove($rowid);
        return redirect(base_url().'cart','refresh');
    }
    public function Footer(){
		$this->data['categories']= $this->CategoryModel->GetCategories();
		$this->load->view('Clients/Footer',$this->data);
	}
	
}
