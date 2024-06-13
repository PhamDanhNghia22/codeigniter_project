<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginController extends CI_Controller {
	public function __contruct(){
		parent::__contruct();
		
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('Clients/Header');
		$this->load->view('Clients/login/index');
		$this->load->view('Clients/Footer');

	}
	public function dangky()
	{
		$this->load->view('Clients/Header');
		$this->load->view('Clients/dangky');
		$this->load->view('Clients/Footer');

	}

	public function register(){
		$this->form_validation->set_rules('username','Username','required',['required'=>'Bạn vui lòng điền %s']);
		$this->form_validation->set_rules('email','Email','required',['required'=>'Bạn vui lòng điền email']);
		$this->form_validation->set_rules('password','Password','required',['required'=>'Bạn vui lòng điền password']);
		if($this->form_validation->run()){
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$data =[
				'username'=>$username,
				'email'=>$email,
				'password'=>$password,
			];
			$this->load->model('Loginmodel');
			$result= $this->Loginmodel->insert_user($data);
			if($result){
				$this->session->set_flashdata('success','Đăng ký thành công, vui lòng bạn đăng nhập');
				redirect(base_url('login'));
			}
		}else{
			$this->dangky();
		}
	}
    public function login(){
		$this->form_validation->set_rules('email','Email','required',['required'=>'Bạn vui lòng điền email']);
		$this->form_validation->set_rules('password','Password','required',['required'=>'Bạn vui lòng điền password']);
		if($this->form_validation->run()){
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$this->load->model('Loginmodel');
			$result = $this->Loginmodel->checkLogin($email,$password);
			if($result){
				$session_array =[
					'IDTK'=> $result[0]->IDTK,
					'username'=> $result[0]->username,
					'email'=> $result[0]->email,
				];
				$this->session->set_userdata('LoginUser',$session_array);
				$this->session->set_flashdata('success','Đăng nhập thành công');
				redirect(base_url('login'));
			}else{
				$this->session->set_flashdata('error','Email hoặc mật khẩu không đúng');
				redirect(base_url('login'));
			}
		}else{
			$this->index();
		}
        
    }
	public function logout(){
		$this->session->unset_userdata('LoginUser');
		$this->session->set_flashdata('success','Đăng xuất thành công');
		redirect(base_url('login'));
	}
}
