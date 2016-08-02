<?php

namespace system\core
{
    use system\helpers\Validation;

    class Request
    {
        /**
         * @var object
         * Guarda uma instância da classe Validation
         */
        public $validation;

        /**
         * Instância a classe Validation
         */
        public function __construct()
        {
            $this->validation = new Validation();
        }

        /**
         * @param string | null $name
         * @return boolean | object
         */
        public function post($name = null)
        {
            $post = (object)$this->validation->filter($_POST, INPUT_POST);

            if(is_null($name))
            {
                return $post;
            }
            else if(isset($post->$name))
            {
                return $post->$name;
            }
            else
            {
                return false;
            }
        }
    }
}