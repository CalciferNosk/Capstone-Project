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

        // $this->load->model('GlobalModal', 'global');
    }
	public function emailOtp(){

       $email =  $_POST['email'];
	   $data['email'] = $email;
	   $data['code']  = 0 ;

	   if(!empty($email)){
		$result = _sendPhpMailer($email,'Email Verification',null,'<h1>test</h1>');
		$data['code'] = 1;
		$data['message'] = 'We sent OTP on your email, please check';
		echo json_encode($data);
		
	   }
	   else{
		$data['message'] = 'Email Required';
		echo json_encode($data);
	   }
    }
}
