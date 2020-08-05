<?php

    //First require the user class file
    require_once('dataObjects.class.php');

    class User extends DataObjects {
        private $conn;
        
        public function __construct () {
            $this->conn = parent::__construct();
        }
        
        public function contact ($full_name,$email,$phone,$subject,$message) {
            $q = "INSERT INTO contact (full_name,email,phone,subject,message) VALUES(:full_name,:email,:phone,:subject,:message)";
            $st = $this->conn->prepare($q);
            if ($st -> execute(array(':full_name'=>$full_name,':email'=>$email,':phone'=>$phone,':subject'=>$subject,':message'=>$message)))
                return true;
            else 
                return false;
        }
        
        public function apply($applicant_name,$parent_name, $parent_phone,$parent_email,$dob,$district,$gender,$address) {
            $q = "INSERT INTO applications (applicants_full_name, parents_full_name, parents_phone, parents_email, applicants_dob, district, applicants_gender, applicants_address)".
                "VALUES (:a_name, :p_name, :p_phone, :p_email, :dob, :district, :gender, :address)";
            $st = $this->conn->prepare($q);
            $st -> execute(array(
                    ':a_name' => $applicant_name,
                    ':p_name' => $parent_name,
                    ':p_phone' => $parent_phone,
                    ':p_email' => $parent_email,
                    ':dob' => $dob,
                    ':district' => $district,
                    ':gender' => $gender,
                    ':address' => $address
            ));
            
            if ($st->rowCount() == 1)
                return true;
            else
                return false;
            
        }
        
    }

?>