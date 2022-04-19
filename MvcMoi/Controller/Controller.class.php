<?php 
require_once "./Model/Database.class.php";
require_once "./Model/Pizza.class.php";
require_once "./Model/Users.class.php";
require_once "./View/View.class.php";
class Controller {
    public function __construct($action)
    {
        new View($action);
    }
}