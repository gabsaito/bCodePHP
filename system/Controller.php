<?php

namespace system
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
         * Met�do construtor
         */
        public function __construct()
        {
            $this->view = new View();
            $this->request = new http\Request();
        }

        /**
         * met�do pai da action index
         */
        public function indexAction()
        {
            echo 'Voc� est� na Index';
        }
    }
}