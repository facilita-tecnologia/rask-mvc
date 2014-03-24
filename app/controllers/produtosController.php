<?php

class Produtos extends Controller {

    public function index_action() {
        $db = new Produtos_Model();
        $db->insert(
                array(
                    "nome" => "REFRIGERANTE 4L RETORNAVEL",
                    "valor" => "150.00"));
    }

    public function novos() {
        $this->view('produtosNovos', 'produtos');
    }

    public function novo() {
        $this->view('novo', 'produtos');
    }

    public function salvar() {

        $nome = $_POST['nome'];
        $valor = $_POST['valor'];

        $db = new Produtos_Model();
        $produto = $db->insert(
                array(
                    "nome" => $nome,
                    "valor" => $valor));
       
       if($produto != null) 
        $this->redirect_to('index','');
    }

}
