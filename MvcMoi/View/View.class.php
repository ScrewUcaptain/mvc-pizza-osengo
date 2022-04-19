<?php

class View {
    
    public function __construct($action){
        require './View/View'.$action.'.php';
    }
}   