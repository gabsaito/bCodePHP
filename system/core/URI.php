<?php

namespace system\core
{
    class URI
    {
        /**
         * @var string
         * Cont�m uri (query string)
         */
        private $uri;

        /**
         * @var string
         * Cont�m o nome do controller solicitado
         */
        private $controller;

        /**
         * @var string
         * Cont�m o nome da a��o a ser executada
         */
        private $action;

        /**
         * @var array int
         * Cont�m os valores dos par�metros para a execu��o da a��o
         */
        private $param = array();

        /**
         * Atribui valor para $this->uri
         * Executa a fun��o $this->explodePathURI()
         */
        public function __construct()
        {
            if(isset($_GET['bcodephp']))
            {
                $this->uri = $_GET['bcodephp'];
            }

            $this->explodePathURI();
        }

        /**
         * @param $attribute
         * @return mixed
         * Retorna o valor da atributo requisitado
         */
        public function __get($attribute)
        {
            return $this->$attribute;
        }

        /**
         * Define o controlador e a a��o a ser executada e monta um array com os par�metros
         */
        private function explodePathURI()
        {
            $uri = (!is_null($this->uri)) ? explode('/', $this->uri) : null;

            if(!is_null($uri))
            {
                $this->controller = (isset($uri[0])) ? $uri[0] : null;
                $this->action     = (isset($uri[1])) ? $uri[1] : null;

                if(count($uri) > 2)
                {
                    for($i = 2; $i < count($uri); $i++)
                    {
                        $this->param[] = (int)$uri[$i];
                    }
                }
            }
        }
    }
}