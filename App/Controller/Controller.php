<?php

namespace App\Controller;

abstract class Controller{
    protected static function render($view, $model = null){
        $view_file = VIEWS . $view . '.php';

        if(file_exists($view_file))
            include $view_file;
        else
            exit('Arquivo da view não encontrado. Arquivo: ' . $view);
    }

    protected static function isAuthenticated(){
        if(!isset($_SESSION['user_logged']))
            header("location: /login");
    }
    /* Retorna um valor como um objeto JSON*/
    protected static function setResponseAsJSON($data, $request_status = true)
    {
        $response = array('response_data' => $data, 'response_successful' => $request_status);

        header("Content-type: application/json; charset=utf-8");
        header("Cache-Control: no-cache, must-revalidate");
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        header("Pragma: public");

        exit(json_encode($response));
    }
}