<?php

namespace system
{
    class View
    {
        /**
         * @var string $pageTitle
         */
        private $pageTitle;

        /**
         * contém o layout da view requisitada
         * @var string $layout
         */
        private $layout;

        /**
         * contém a instância da classe Smarty
         * @var object $smarty
         */
        private static $smarty;

        /**
         * Metódo construtor
         * Instância a classe smarty(classe terceira(externa))
         */
        public function __construct()
        {
            self::$smarty = new \Smarty();
            self::$smarty->template_dir = VIEWS_PATH;
            self::$smarty->compile_dir = VC_PATH;
        }

        /**
         * @param string $layout
         * Metódo que atribui o nome do arquivo da view requisitada
         */
        public function setLayout($layout)
        {
            $this->layout = $layout . EXT_VIEWS;
        }

        /**
         * Recebe e atribui titulo da página
         * @param string $title
         */
        public function setTitle($title = null)
        {
            $this->pageTitle = $title;
        }

        private function assignTitle()
        {
            $pageTitle = NAME;

            if(!is_null($this->pageTitle))
            {
                $pageTitle = $this->pageTitle . ' - ' . NAME;
            }

            $this->prepare('pageTitle', $pageTitle);
        }

        /**
         * @param string $variable
         * @param mixed $content
         * Metódo de acesso para smarty->assign
         */
        public function prepare($var, $value)
        {
            self::$smarty->assign($var, $value);
        }

        /**
         * Metódo responsavel por mostrar a view
         */
        public function show()
        {
            $this->assignTitle();
            self::$smarty->display($this->layout);
        }
    }
}