<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

class CheckoutController extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('HomeModel');
        $this->load->model('CheckoutModel');
        
    }

    public function checkout(){
        $this->load->view('Clients/Header');
        $this->load->view('Clients/Checkout');
        $this->Footer();

    }

    public function order(){
        $this->load->view('Clients/Header');
        $this->data['MyOrder'] = $this->CheckoutModel->Get_order();
        // $this->data['MyOrderDetail'] = $this->CheckoutModel->Get_orderDetail();
        $this->data['MyShipping'] = $this->CheckoutModel->Get_shipping();
        $this->load->view('Clients/order',$this->data);
        $this->Footer();
    }

    public function payment(){
        $this->form_validation->set_rules('username','Username','required',['required'=>'Bạn vui lòng điền địa chỉ']);
        $this->form_validation->set_rules('email','Email','required',['required'=>'Bạn vui lòng điền địa chỉ']);
        $this->form_validation->set_rules('address','Address','required',['required'=>'Bạn vui lòng điền địa chỉ']);
        $this->form_validation->set_rules('telephone','Telephone','required',['required'=>'Bạn vui lòng điền số điện thoại']);
        $this->form_validation->set_rules('method','Method','required',['required'=>'Bạn vui lòng chọn phương thức']);
        if($this->form_validation->run() ){
            
            $order_code = rand(0,9999);
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $address = $this->input->post('address');
            $telphone = $this->input->post('telephone');
            $method = $this->input->post('method');
            $total = $this->input->post('total');
            $create_datetime= Carbon\Carbon::now() ;
            $data_shipping = [
                'username' => $username,
                'email' => $email,
                'address' => $address,
                'telphone'=>$telphone,
                'method' => $method,
                'create_datetime' =>$create_datetime,
            ];
            $result_ship = $this->CheckoutModel->NewShipping($data_shipping);
            if($result_ship){
                $data_order=[
                    'order_code' => $order_code,
                    'total' => $total,
                    'ship_id' => $result_ship,
                ];
                $result_order=$this->CheckoutModel->insert_order($data_order);
                    foreach($this->cart->contents() as $item){
                        $data_DetailOrder =[
                            'order_code' => $order_code,
                            'id_sp' => $item['id'],
                            'ten_sp' => $item['name'],
                            'HinhAnhSP' => $item['options']['image'],
                            'GiaSP' => $item['price'],
                            'SoLuongSP' => $item['qty'],
                        ];
                        $this->CheckoutModel->insert_DetailOrder($data_DetailOrder);
                    }
                    $this->session->set_flashdata('success','Đặt hàng thành công');
                    $this->cart->destroy();
                    return redirect(base_url().'checkout');

            
                
                
            }else{
                $this->checkout();
            }
        }else{
            $this->checkout();
        }
        
        
    }
    public function Footer(){
        $this->data['categories']= $this->HomeModel->GetCategories();
        $this->load->view('Clients/Footer',$this->data);
    }
}
    
?>