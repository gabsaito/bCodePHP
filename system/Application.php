<?php

namespace system
{
    use system\http\Response;

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
            $this->response = new Response();
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
                Response::redirect('notfound');
            }

            $namespaceController = '\\application\\controllers\\' . $controller;
            $objController = new $namespaceController();

            if(is_null($action))
            {
                $action = 'indexAction';
            }
            else if(!method_exists($objController, $action))
            {
                Response::redirect($controller);
            }

            $objController->$action($param);
        }
    }
}