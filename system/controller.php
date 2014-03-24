<?php

class Controller extends System {

    protected function view($name, $vars = null) {

        if (is_array($vars) && count($vars) > 0)
            extract($vars, EXTR_PREFIX_ALL, 'view');

        return require_once ( VIEWS . $name . '.phtml');
    }

}
