<?php 

if(!function_exists('_load_view')){
    function _load_view($script,$directory,$data = []){
        // var_dump($directory);die;
        $CI =& get_instance();
        $CI->load->view('layout/header');
        $CI->load->view('layout/footer',$script);
		$CI->load->view($directory,[]);
        return ;
    }
}

if(!function_exists('_sendPhpMailer')){
    function _sendPhpMailer($email,$subject = 'Text',$cc = null,$body){
        $CI =& get_instance();
      
        $CI->load->library('phpmailer_lib');
    
        // PHPMailer object
        $mail = $CI->phpmailer_lib->load();
        // $mail->SMTPDebug = 3;                               
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = 'smtp.gmail.com';   
        $mail->SMTPAuth = true;
        $mail->Username = 'benjaminbritanico@gmail.com';
        $mail->Password = 'uved pzks mylf hhom'; # create here https://myaccount.google.com/apppasswords?pli=1&rapt=AEjHL4N3Ucs5jEph3Jsr49Anyj_GTq2DJCMP_Z5del3rXoqDdl8B0JgtCjiGBRVZGwJQNXae35bVh976JwH5z3Q8kRDZGPfupg
        $mail->SMTPSecure = 'tls';
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 587;   
        
        $mail->setFrom('eadriano.it@gmail.com', 'Lapaz National High School');
        $mail->addReplyTo('eadriano.it@gmail.com', 'LNHS');
        
        // Add a recipient
        $mail->addAddress($email);
        
        // Add cc or bcc 
        if($cc != null ){
            $mail->addCC($cc);
        }
        // $mail->addBCC('bcc@example.com');
        
        // Email subject
        $mail->Subject = $subject;
        
        // Set email format to HTML
        $mail->isHTML(true);
        
        // Email body content
        $mail->Body = $body;
        
        // Send email
        if(!$mail->send()){
            $result['msg'] =  'Message could not be sent.  | Mailer Error: ' . $mail->ErrorInfo;
            $result['error'] = 0;
        }else{
           $result['msg'] = 'Message has been sent';
           $result['error'] = 1;
        }
      
       return $result;
    }
}
if(!function_exists('_registrationSpiel')){
    function _registrationSpiel($password,$username){
        $base_url = base_url();
    $html = "
            <h3>Warning!! :do not share your credentials</h3>
            <br>
            <br>
            <span>Username : {$username}</span>
            <br>
            <span>Password : {$password}</span>
            <br><br>
           

            Click the <a href='{$base_url}'>link</a> to login
    ";
       return $html;
    }
}


   
?>