<?php
     class Index extends Controller{
         
         public function  index_action(){
             echo $this->getParam('nome');
             $this->view('Index');
         }
         
     }