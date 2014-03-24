<?php

class Index extends Controller {

    public function index_action() {

        $params = array("one" => "red", "two" => "blue", "three" => "green");

        $response = xmlrpc_encode($params);

        echo ( $response );
        // $dados = $this->getParam();
        // $this->view('Index', 'index', $dados);
    }

}
