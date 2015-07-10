<?php

namespace App\Model;
use PDO;

 class User {
	 public $username = null;
	 public $password = null;

	 public function __construct( $data = array() ) {
		 if( isset( $data['username'] ) ) $this->username = stripslashes( strip_tags( $data['username'] ) );
		 if( isset( $data['password'] ) ) $this->password = stripslashes( strip_tags( $data['password'] ) );
	 }

     public function getName(){
         return $this->username;
     }
     public function getPass(){
        return $this->password;
     }

     private function setName(){

     }

     private function setPass(){

     }
 }

?>