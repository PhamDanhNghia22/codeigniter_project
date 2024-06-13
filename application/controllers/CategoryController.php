<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoryController extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->model('CategoryModel');
	}

    public function list(){
        $this->data['categories']= $this->CategoryModel->GetCategories();
        $this->load->view('Admin/Header');
        $this->load->view('Admin/Category/List',$this->data);
        $this->load->view('Admin/Footer');
    }

    public function create(){
        $this->load->view('Admin/Header');
        $this->load->view('Admin/Category/Create');
        $this->load->view('Admin/Footer');
    }

    public function insert(){
        $tendm = $this->input->post('tendm');
        $trangthai_dm = $this->input->post('trangthai_dm');
        $motadm = $this->input->post('motadm');
        $data = [
            'TenDM' =>$tendm,
            'statust_dm' =>$trangthai_dm,
            'MotaDM' =>$motadm,
        ];
        $result=$this->CategoryModel->insertCategory($data);
        if($result){
            $this->session->set_flashdata('success','Thêm thể loại thành công');
            return redirect(base_url('Admin/category'));
        }else{
            $this->session->set_flashdata('error','Thêm thể loại thất bại');
            return redirect(base_url('Admin/category'));
        }
    }

    public function edit($id){
        $this->data['category']= $this->CategoryModel->GetCategory($id);
        $this->load->view('Admin/Header');
        $this->load->view('Admin/Category/Edit',$this->data);
        $this->load->view('Admin/Footer');
    } 
    public function update($id){
        $tendm = $this->input->post('tendm');
        $trangthai_dm = $this->input->post('trangthai_dm');
        $motadm = $this->input->post('motadm');
        $data = [
            'TenDM' =>$tendm,
            'statust_dm' =>$trangthai_dm,
            'MotaDM' =>$motadm,
        ];
        $result= $this->CategoryModel->UpdateCategory($id,$data);
        if($result){
            $this->session->set_flashdata('success','Cập nhật thể loại thành công');
            return redirect(base_url('Admin/category'));
        }else{
            $this->session->set_flashdata('error','Cập nhật thể loại thất bại');
            return redirect(base_url('Admin/category'));
        }
    } 
    public function delete($id){
        $result = $this->CategoryModel-> DeleteCategory($id);
        if($result){
            $this->session->set_flashdata('success','Xóa thể loại thành công');
            return redirect(base_url('Admin/category'));
        }else{
            $this->session->set_flashdata('error','Xóa thể loại thất bại');
            return redirect(base_url('Admin/category'));
        }

    }
}