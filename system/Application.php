<?php

namespace system
{
    class Application
    {
        /**
         * @var object $response
         */
        private $response;

        /**
         * Metódo construtor
         * Instância a classe Request
         */
        public function __construct()
        {
            $this->response = new http\Response();
        }

        /**
         * Instância os controllers requisitado e executa as actions
         */
        public function start()
        {
            $controller = $this->response->__get('controller');
            $action     = $this->response->__get('action');
            $param      = $this->response->__get('param');

            $controllerPath = CONTROLLERS_PATH . $controller . '.php';

            if(!file_exists($controllerPath))
            {
                header('Location:' . URL_BASE . 'notfound');
            }

            $namespaceController = '\\application\\controllers\\' . $controller;
            $objController = new $namespaceController();

            if(is_null($action))
            {
                $action = 'indexAction';
            }
            else if(!method_exists($objController, $action))
            {
                header('Location:' . URL_BASE . strtolower(str_replace('Controller', '', $controller)));
            }

            $objController->$action($param);
        }
    }
}