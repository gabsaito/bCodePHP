<?php

namespace system\core
{
    class Controller
    {
        /**
         * @var object
         * Guarda uma inst�ncia da classe View
         */
        public $view;

        /**
         * @var object
         * Guarda uma inst�ncia da classe Request
         */
        public $request;

        /**
         * Inst�ncia a classe View e Request
         */
        public function __construct()
        {
            $this->view = new View();
            $this->request = new Request();
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