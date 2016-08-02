<?php

namespace system\core
{
    class View
    {
        /**
         * @var string
         * cont�m diret�rio dos arquivos da View
         */
        private $folderViews;

        /**
         * @var array
         * cont�m as variaveis e seus respectivos valores para serem passados para a View
         */
        private $data = array();

        /**
         * Atribui valor para a variavel $folderViews
         */
        public function __construct()
        {
            $this->folderViews = VIEWS_PATH;
        }

        /**
         * @param string $varName
         * @param mixed $varData
         */
        public function setVar($varName, $varData)
        {
            $this->data[$varName] = $varData;
        }

        /**
         * @param string $view
         */
        public function render($view)
        {
            $filePath = VIEWS_PATH . $view . ".php";
            if(!file_exists($filePath))
            {
                exit('Aten��o! O arquivo ' . $view . ' especificado n�o foi encontrado.');
            }
            extract($this->data);
            include_once($filePath);
        }
    }
}