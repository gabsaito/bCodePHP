<?php

namespace system\core
{
    class URI
    {
        /**
         * @var string
         * Contém uri (query string)
         */
        private $uri;

        /**
         * @var string
         * Contém o nome do controller solicitado
         */
        private $controller;

        /**
         * @var string
         * Contém o nome da ação a ser executada
         */
        private $action;

        /**
         * @var array int
         * Contém os valores dos parâmetros para a execução da ação
         */
        private $param = array();

        /**
         * Atribui valor para $this->uri
         * Executa a função $this->explodePathURI()
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
         * Define o controlador e a ação a ser executada e monta um array com os parâmetros
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