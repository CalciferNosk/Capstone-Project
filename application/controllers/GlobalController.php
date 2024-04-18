<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GlobalController extends CI_Controller {

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

	public function __construct()
    {
        parent::__construct();

        $this->load->model('GlobalModel', 'global');
    }
	public function emailOtp(){

       $email =  $_POST['email'];
	   $subject = "Email Verification";
	   $body 	=	'<h1>test</h1>';
	   $mail_cc = null;
	   $data['email'] = $email;  # assign email
	   $data['code']  = 0 ; #set default code to 0

	   if(!empty($email)){
		$result = _sendPhpMailer($email,$subject,$mail_cc,$body);
			$data['code'] = $result['error'];
			$data['message'] = 'We sent OTP on your email, please check';
		echo json_encode($data);
	   }
	   else{
		$data['message'] = 'Email Required';
		echo json_encode($data);
	   }
    }
	public function loginUser(){

	   $username =  $_POST['username'];
	   $password =  $_POST['password'];
		$data['code'] = 404;
		$data['message'] = 'error';
	   if(isset($username) || !isset($password)){
			$result = $this->global->verifyUserLogin($username);
			if(!empty($result)){
				
				if($result->Password == $password){
					$data['code'] = 200;
					$data['message'] = 'Login Success';
					$this->setSession($result);
				}else{
					$data['code'] = 401;
					$data['message'] = 'Password does not match';
				}
			}
			else{
				$data['code'] = 401;
				$data['message'] = 'Username not found';
			}
	   }
	echo json_encode($data);
	   
	}
	public function logout(){

		$this->session->sess_destroy();
		redirect(base_url());
	}
	private function setSession($result){

		$this->session->set_userdata('username', $result->Username);
		$this->session->set_userdata('password', $result->Password);
		$this->session->set_userdata('role', $result->Role);
		$this->session->set_userdata('role_id', $result->RoleId);
		$this->session->set_userdata('SchoolId', $result->SchoolId);
		$this->session->set_userdata('SystemId', $result->id);
		
	}
}
