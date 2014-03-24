<?php
    define('CONTROLLERS', 'app/controllers/');
    define('VIEWS', 'app/views/');
    define('MODELS', 'app/models/');

    require_once ('system/system.php');
    require_once ('system/controller.php');
    require_once ('system/model.php');

    function  __autoload( $file){
         require_once MODELS . $file .'.php';
     }
   
     $start = new System;
     $start->run();