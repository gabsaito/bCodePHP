<?php

namespace system\core
{
    class BCodePHP
    {
        /**
         * @var object
         * Cont�m uma inst�ncia da classe URI
         */
        private $uri;

        /**
         * Inst�ncia a classe URI
         */
        public function __construct()
        {
            $this->uri = new URI();
        }

        /**
         * Recupera e atribui os valores para o controlador, action e param
         * Verifica se existe o arquivo do controlador solicidado
         * Verifica se existe o met�do da action solicidada
         * Executa o controlador, caso exista
         * Executa a a��o e informa os par�metros, caso a a��o exista
         */
        public function start()
        {
            $controller = $this->uri->__get('controller');
            $action     = $this->uri->__get('action');
            $param      = $this->uri->__get('param');

            if(is_null($controller))
            {
                $controller = 'home';
            }
            else if(!file_exists(CONTROLLERS_PATH . ucfirst($controller) . 'Controller.php'))
            {
                Response::redirectIn('notfound');
            }

            $instance_controller = '\\application\\controllers\\' . ucfirst($controller) . 'Controller';
            $class  = new $instance_controller();

            if(is_null($action))
            {
                $action = 'index';
            }
            else if(!method_exists($class, $action . 'Action'))
            {
                Response::redirectIn('notfound');
            }

            $action = $action . 'Action';
            $class->$action($param);
        }
    }
}