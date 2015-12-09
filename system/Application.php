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
         * Met�do construtor
         * Inst�ncia a classe Request
         */
        public function __construct()
        {
            $this->response = new http\Response();
        }

        /**
         * Inst�ncia os controllers requisitado e executa as actions
         */
        public function start()
        {
            $controller = $this->response->__get('controller');
            $action     = $this->response->__get('action');
            $param      = $this->response->__get('param');

            $controllerPath = CONTROLLERS_PATH . $controller . '.php';

            if(!file_exists($controllerPath))
            {
                $controller = 'NotFoundController';
            }

            $namespaceController = '\\application\\controllers\\' . $controller;
            $objController = new $namespaceController();

            if(!method_exists($objController, $action))
            {
                $action = 'indexAction';
            }

            $objController->$action($param);
        }
    }
}