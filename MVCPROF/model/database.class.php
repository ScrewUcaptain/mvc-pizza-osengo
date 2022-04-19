<?php
    class Database extends PDO {
        private $dbname = "pizzeriabdd";
        private  $username = "root";
        private  $pass="3u4hEctet0wcp0a";

        function __construct(){
            parent::__construct("mysql:host=localhost;dbname=$this->dbname; charset=utf8", $this->username, $this->pass);
        }
    }