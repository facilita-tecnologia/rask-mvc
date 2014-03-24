<?php
     class Produtos extends Controller{
         
         public function  index(){
             $db = new Produtos_Model();
             $db->insert( 
                     array(
                         "nome" => "REFRIGERANTE 4L RETORNAVEL",
                         "valor" => "150.00" ));
         }
         
          public function  novos(){
              $this->view('produtosNovos');
         }
     }

