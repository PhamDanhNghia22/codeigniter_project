<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductController extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('CategoryModel');
        $this->load->model('ProductModel');
    }

    public function list(){
        $this->data['products']= $this->ProductModel->Get_AllProduct();
        $this->load->view('Admin/Header');
        $this->load->view('Admin/Product/list',$this->data);
        $this->load->view('Admin/Footer');
    }
    public function create(){
        $this->data['categories']= $this->CategoryModel->GetCategories();
        $this->load->view('Admin/Header');
        $this->load->view('Admin/Product/create',$this->data);
        $this->load->view('Admin/Footer');
    }

    public function insert(){
        $ori_img = $_FILES['image']['name'];
        $new_name =time()."".str_replace(' ','-',$ori_img);
        $config = [
            'upload_path'=>'./images/',
            'allowed_types'=> 'gif|jpg|png|jpeg',
            'file_name' =>$new_name
        ];
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('image'))
        {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('upload_form', $error);
        }
        else
        {
            $prod_file=$this->upload->data('file_name');
            $data =[
                'TenSP'=>$this->input->post('tensp'),
                'HinhAnhSP'=> $prod_file,
                'GiaSP'=>$this->input->post('giasp'),
                'ViewSP'=>0,
                'MotaSP'=>$this->input->post('motasp'),
                'statust_sp'=>$this->input->post('trangthai_sp'),
                'MaDM'=>$this->input->post('danhmuc_sp'),
            ];
            $result= $this->ProductModel->InsertProduct($data);
            if($result){
                $this->session->set_flashdata('success','Thêm sản phẩm thành công');
                return redirect(base_url('Admin/product'));
            }else{
                $this->session->set_flashdata('error','Thêm sản phẩm thất bại');
                return redirect(base_url('Admin/product'));
            }
        }
        
        
    }

    public function edit($id){
        $this->data['categories']= $this->CategoryModel->GetCategories();
        $this->data['product']=$this->ProductModel->ProdDetail($id);
        $this->load->view('Admin/Header');
        $this->load->view('Admin/Product/edit',$this->data);
        $this->load->view('Admin/Footer');
    }

    public function update($id){
        $ori_img = $_FILES['image']['name'];
        $new_name =time()."".str_replace(' ','-',$ori_img);
        $config = [
            'upload_path'=>'./images/',
            'allowed_types'=> 'gif|jpg|png|jpeg',
            'file_name' =>$new_name
        ];
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('image'))
        {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('upload_form', $error);
        }
        else
        {
            $prod_file=$this->upload->data('file_name');
            $data =[
                'TenSP'=>$this->input->post('tensp'),
                'HinhAnhSP'=> $prod_file,
                'GiaSP'=>$this->input->post('giasp'),
                'ViewSP'=>0,
                'MotaSP'=>$this->input->post('motasp'),
                'statust_sp'=>$this->input->post('trangthai_sp'),
                'MaDM'=>$this->input->post('danhmuc_sp'),
            ];
            $result= $this->ProductModel->UpdateProduct($id,$data);
            if($result){
                $this->session->set_flashdata('success','Thêm sản phẩm thành công');
                return redirect(base_url('Admin/product'));
            }else{
                $this->session->set_flashdata('error','Thêm sản phẩm thất bại');
                return redirect(base_url('Admin/product'));
            }
        }
    }
    public function delete($id){
        $result = $this->ProductModel->DeleteProduct($id);
        if($result){
            $this->session->set_flashdata('success','Xóa sản phẩm thành công');
            return redirect(base_url('Admin/product'));
        }else{
            $this->session->set_flashdata('error','Xóa sản phẩm thất bại');
            return redirect(base_url('Admin/product'));
        }

    }
}