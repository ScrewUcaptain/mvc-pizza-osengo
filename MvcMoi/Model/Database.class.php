<?php 
class Database extends PDO{
    function __construct(){
        parent::__construct('mysql:host=localhost;dbname=pizzeriabdd;charset=utf8','root','3u4hEctet0wcp0a');
    }
}