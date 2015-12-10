<?php

namespace system\http
{
    class Response
    {
        /**
         * @var string $controller
         */
        private $controller;

        /**
         * @var string $action
         */
        private $action;

        /**
         * @var int $param
         */
        private $param;

        /**
         * Construtor da classe
         */
        public function __construct()
        {
            $this->separeteURI();
        }

        /**
         * Metódo mágico __get
         * @param string $name
         * @return string | array
         */
        public function __get($name)
        {
            return $this->$name;
        }

        /**
         * Metódo que separa URI e defini uma rota
         * @return object $this
         */
        private function separeteURI()
        {
            $baseURI       = $_SERVER['REQUEST_URI'];
            $slicedURI     = explode('/', $baseURI);
            $slicedURI     = array_filter($slicedURI);
            $slicedURITemp = array();

            foreach($slicedURI as $value)
            {
                $slicedURITemp[] = $value;
            }

            $slicedURI = $slicedURITemp;

            if(count($slicedURI) > 1)
            {
                if(count($slicedURI) == 2)
                {
                    $this->controller = ucfirst($slicedURI[1]) . 'Controller';
                }
                else if(count($slicedURI) == 3)
                {
                    $this->controller = ucfirst($slicedURI[1]) . 'Controller';
                    $this->action     = $slicedURI[2] . 'Action';
                }
                else if(count($slicedURI) == 4)
                {
                    $this->controller = ucfirst($slicedURI[1]) . 'Controller';
                    $this->action     = $slicedURI[2] . 'Action';
                    $this->param      = (int)$slicedURI[3];
                }
            }
            else
            {
                $this->controller = 'HomeController';
            }
        }
    }
}