<?php

namespace App\Model;
use PDO;

class Database {
    public $con;

    public function __construct(){
        $this->connect();
    }

    public function connect() {
        $this->con = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
        $this->con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        return $this->con;
    }
    public function disconnect(){
        $this->con = null;
    }
}