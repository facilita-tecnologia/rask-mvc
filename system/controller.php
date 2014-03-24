<?php
    class Controller extends System {
        
        protected function  view( $name ){
            return require_once ('/app/views/'.$name.'.phtml');
        }
    }

