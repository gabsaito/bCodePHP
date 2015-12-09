<?php

namespace system
{
    class View
    {
        /**
         * @var object $Smarty
         */
        public $smarty;

        /**
         * @var string $title
         */
        private $title;

        /**
         * @var string $header
         */
        private $header;

        /**
         * @var string $footer
         */
        private $footer;

        /**
         * Met�do construtor
         */
        public function __construct()
        {
            $this->title  = NAME;
            $this->header = 'header';
            $this->footer = 'footer';

            // inst�ncia a classe Smarty
            $this->smarty = new \Smarty();
            $this->smarty->template_dir = VIEWS_PATH;
            $this->smarty->compile_dir  = VC_PATH;
        }

        /**
         * @param string $title
         */
        public function setTitle(string $title)
        {
            $this->title = $title;
        }

        /**
         * @param string $header
         */
        public function setHeader(string $header)
        {
            $this->header = $header;
        }

        /**
         * @param string $footer
         */
        public function setFooter(string $footer)
        {
            $this->footer = $footer;
        }

        /**
         * @param string $var
         * @param mixed $value
         * @return $this
         */
        public function setVar(string $var, mixed $value)
        {
            $this->smarty->assign($var, $value);
            return $this;
        }

        /**
         * @param array $vars
         * atribui os valores da varieaveis da view a partir de um array relacional
         */
        public function setVars(array $vars)
        {
            if(count($vars) > 0)
            {
                foreach($vars as $key => $value)
                {
                    $this->smarty->assign($key, $value);
                }
            }
        }

        /**
         * @param string $template
         * Realiza a rederiza��o da view
         */
        public function show($template = '')
        {
            $this->smarty->assign('css', CSS_PATH);
            $this->smarty->assign('js', JS_PATH);
            $this->smarty->assign('imgs', IMGS_PATH);

            if(!file_exists(VIEWS_PATH . $this->header . EXT_VIEWS))
            {
                exit('Aten��o! O arquivo header especificado n�o foi encontrado.');
            }
            $this->smarty->assign('pageTitle', $this->title);
            $this->smarty->display($this->header . EXT_VIEWS);

            if((empty($template)) or (!file_exists(VIEWS_PATH . $template . EXT_VIEWS)))
            {
                exit('Aten��o! O arquivo templante especificado n�o foi encontrado.');
            }
            $this->smarty->display($template . EXT_VIEWS);

            if(!file_exists(VIEWS_PATH . $this->footer . EXT_VIEWS))
            {
                exit('Aten��o! O arquivo footer especificado n�o foi encontrado.');
            }
            $this->smarty->display($this->footer . EXT_VIEWS);
        }
    }
}