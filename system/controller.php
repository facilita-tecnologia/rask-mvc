<?php

class Controller extends System {
    /*
     * @param String $name Nome view
     * @param String $Controller Nome do controller ex: Usuario, Produto
     * @param Array $vars Parametro opcional 
     */

    protected function view($name, $controller, $vars = null) {

        if (is_array($vars) && count($vars) > 0)
            extract($vars, EXTR_PREFIX_ALL, 'view');

        return require_once ( VIEWS . $controller . '/' . $name . '.phtml');
    }

    /* Dedirecionamento
     * @param String $controller 
     * @param String $action
     */

    protected function redirect_to($controller, $action = 'index') {

        $host = $_SERVER['HTTP_HOST'];
        $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        header("Location: $uri/$controller/$action");
        exit;
    }

    /* Converte Array em Json
     * @param Array $data
     */

    protected function toJson($data) {
        return json_encode($data);
    }

    protected function toXml(Array $data){
        //
    }
}
