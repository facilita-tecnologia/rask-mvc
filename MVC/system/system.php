<?php
/* 
 * Create web applications simpler, faster and with less code. with the MVC Framework Rask
 * @author Jocinardo Rodrigues <jocinardo.rodrigues@gmail.com>
 */

    class System{
        
        private $_url;
        private $_explode;
        public $_controller;
        public $_action;
        public $_params;
        
        public function __construct() {
            $this->setUrl();
            $this->setExplode();
            $this->serController();
            $this->setAction();
        }
        
        private function setUrl(){
            $_GET['url'] = (isset($_GET['url']) ? $_GET['url'] : 'index/index_action');
            $this->_url = $_GET['url'];
        }
        
        private function  setExplode(){
            $this->_explode = explode( '/', $this->_url );
        }
        
        private function serController(){
            $this->_controller  = $this->_explode[0];
        }
        
        private function setAction(){
            $ac = (!isset($this->_explode[1]) || $this->_explode[1] == null || $this->_explode == "index" ? "index_action" : $this->_explode[1]);
            $this->_action = $ac;
        }
    }
 