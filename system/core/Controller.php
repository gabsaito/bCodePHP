<?php

namespace system\core
{
    class Controller
    {
        /**
         * @var object $view
         */
        public $view;

        /**
         * @var object $request
         */
        public $request;

        /**
         * Metódo construtor
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