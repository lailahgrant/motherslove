<?php

    //require the user class file
    require_once('user.class.php');
    
    $user = new User();
    
    $username = filter_var($_POST['username'],FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $pass = filter_var($_POST['pass'],FILTER_SANITIZE_STRING);
    $hash = password_hash($pass,PASSWORD_DEFAULT);
    
    if ($user->register($username,$email,$hash))
        $response['reply'] = 'done';
    else 
        $response['reply'] = 'failed';

    echo json_encode($response);

?>