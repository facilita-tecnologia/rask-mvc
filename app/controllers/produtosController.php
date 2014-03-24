<?php
     class Produtos extends Controller{
         
         public function  index_action(){
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

