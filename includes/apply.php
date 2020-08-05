<?php

    //Require the user class file
    require_once('user.class.php');
    $user = new User();

    $applicant_name = filter_var($_POST['applicant_name'],FILTER_SANITIZE_STRING);
    $parent_name = filter_var($_POST['parent_name'],FILTER_SANITIZE_STRING);
    $parent_phone = filter_var($_POST['parent_phone'],FILTER_SANITIZE_STRING);
    $parent_email = filter_var($_POST['parent_email'],FILTER_SANITIZE_EMAIL);
    $dob = $_POST['applicant_dob'];
    $district = filter_var($_POST['district'],FILTER_SANITIZE_STRING);
    $gender = filter_var($_POST['gender'],FILTER_SANITIZE_STRING);
    $address = filter_var($_POST['address'],FILTER_SANITIZE_STRING);
    
    $response = [];
    
    if ($user->apply($applicant_name,$parent_name,$parent_phone,$parent_email,$dob,$district,$gender,$address)) {
        $response['reply'] = 'done';
        ////////////////////////////////////////////////////
        //TODO: Send mail to web master about application //
        ////////////////////////////////////////////////////
    }
    else 
        $response['reply'] = 'failed';
    
    echo json_encode($response);

?>