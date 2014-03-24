<?php
    class Controller {
        
        protected function  view( $name ){
            
            return require_once ('/app/views/'.$name.'.phtml');
        }
    }

