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
         * Metódo construtor
         */
        public function __construct()
        {
            $this->title  = NAME;
            $this->header = 'header';
            $this->footer = 'footer';

            // instância a classe Smarty
            $this->smarty = new \Smarty();
            $this->smarty->template_dir = VIEWS_PATH;
            $this->smarty->compile_dir  = VC_PATH;
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
         * @param string $var
         * @param mixed $value
         * @return $this
         */
        public function setVar($var, $value)
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
         * Realiza a rederização da view
         */
        public function show($template = '')
        {
            $this->smarty->assign('css', str_replace(DS, '/', URL_BASE . CSS_PATH));
            $this->smarty->assign('js', str_replace(DS, '/',  URL_BASE . JS_PATH));
            $this->smarty->assign('imgs', str_replace(DS, '/',  URL_BASE . IMGS_PATH));

            if(!file_exists(VIEWS_PATH . $this->header . EXT_VIEWS))
            {
                exit('Atenção! O arquivo header especificado não foi encontrado.');
            }
            $this->smarty->assign('pageTitle', $this->title);
            $this->smarty->display($this->header . EXT_VIEWS);

            if((empty($template)) or (!file_exists(VIEWS_PATH . $template . EXT_VIEWS)))
            {
                exit('Atenção! O arquivo templante especificado não foi encontrado.');
            }
            $this->smarty->display($template . EXT_VIEWS);

            if(!file_exists(VIEWS_PATH . $this->footer . EXT_VIEWS))
            {
                exit('Atenção! O arquivo footer especificado não foi encontrado.');
            }
            $this->smarty->display($this->footer . EXT_VIEWS);
        }
    }
}