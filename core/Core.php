<?php

class Core
{

    public function run()
    {

        $url = $_GET['url'];
        $params = array();
        if (!empty($url) && $url != '/') {
            $url = explode('/', $url);
            array_shift($url);

            $currentController = $url[0] . 'Controller';
            array_shift($url);

            if (isset($url[0]) && !empty($url[0])) {
                $currentAction = $url[0];
            } else {
                $currentAction = 'index';
            }

            array_shift($url);

            if (count($url) > 0) {
                $params = $url;
            }


        } else {
            $currentController = 'homeController';
            $currentAction = 'index';
        }

        $c = new $currentController();

        if (method_exists($c, $currentAction)) {
            call_user_func_array(array($c, $currentAction), $params);
        } else {
            require 'views/errors/404.php';
        }
    }

}