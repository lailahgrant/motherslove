<?php
    
    //define the database connection constants
    define('DSN','mysql:host=localhost;dbname=mothers_love');
    define('DB_USER','root');
    define('DB_PASS','');

    //Now create the dataobjects class
    class DataObjects {
        private $dbc;
        public function __construct() {
            try {
                $this -> dbc = new pdo(DSN,DB_USER,DB_PASS);
                $this -> dbc -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }
            catch (PDOException $e) {
                die('Database connection failed. '.$e -> getMessage());
            }
            return $this -> dbc;
        }
    }

?>