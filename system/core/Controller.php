<?php

namespace system\core
{
    class Controller
    {
        /**
         * @var object
         * Guarda uma instância da classe View
         */
        public $view;

        /**
         * @var object
         * Guarda uma instância da classe Request
         */
        public $request;

        /**
         * Instância a classe View e Request
         */
        public function __construct()
        {
            $this->view = new View();
            $this->request = new Request();
        }

        /**
         * metódo pai da action index
         */
        public function indexAction()
        {
            echo 'Você está na Index';
        }
    }
}