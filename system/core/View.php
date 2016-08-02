<?php

namespace system\core
{
    class View
    {
        /**
         * @var string
         * Guarda o titulo da view solicitada
         */
        private $title;

        /**
         * @var string
         * Guarda o header para a view solicitada
         */
        private $header;

        /**
         * @var string
         * Guarda o footer para a view solicitada
         */
        private $footer;

        /**
         * @var string
         * contém diretório dos arquivos da View
         */
        private $folderViews;

        /**
         * @var array
         * contém as variaveis e seus respectivos valores para serem passados para a View
         */
        private $data = array();

        /**
         * Atribui valor para a variavel $folderViews
         */
        public function __construct()
        {
            $this->folderViews = VIEWS_PATH;
            $this->title = NAME;
            $this->header = "header";
            $this->footer = "footer";
        }

        /**
         * @param string $title
         */
        public function setTitle($title)
        {
            $this->title = $title . ' - ' . $this->title;
        }

        /**
         * @param string $header
         */
        public function setHeader($header)
        {
            $this->header = $header;
        }

        /**
         * @param string $footer
         */
        public function setFooter($footer)
        {
            $this->footer = $footer;
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
            $headerPath = VIEWS_PATH . $this->header . ".php";
            if(!file_exists($headerPath))
            {
                exit('Atenção! O arquivo ' . $this->header . ' especificado não foi encontrado.');
            }
            $pageTitle = $this->title;
            include_once($headerPath);

            $viewPath = VIEWS_PATH . $view . ".php";
            if(!file_exists($viewPath))
            {
                exit('Atenção! O arquivo ' . $view . ' especificado não foi encontrado.');
            }
            extract($this->data);
            include_once($viewPath);

            $footerPath = VIEWS_PATH . $this->footer . ".php";
            if(!file_exists($footerPath))
            {
                exit('Atenção! O arquivo ' . $this->footer . ' especificado não foi encontrado.');
            }
            include_once($footerPath);
        }
    }
}