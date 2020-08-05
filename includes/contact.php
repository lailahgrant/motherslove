<?php

    require_once('user.class.php');
    $user = new User();
    
    $full_name = filter_var($_POST['full_name'],FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST['phone'],FILTER_SANITIZE_EMAIL);
    $subject = filter_var($_POST['subject'],FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'],FILTER_SANITIZE_STRING);
    
    $response = array();
    
    if ($user->contact($full_name,$email,$phone,$subject,$message)) {
        ///////////////////////////////////
        //TODO: Send email to webmaster  //
        ///////////////////////////////////
        $response['reply'] = 'done';
    }
    else 
        $response['reply'] = 'failed';

    echo json_encode($response);

?>