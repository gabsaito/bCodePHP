<?php

namespace system\http
{
    use system\helpers\Validation;

    class Request
    {
        /**
         * @var object $validation
         */
        public $validation;

        /**
         * Metódo construtor
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
            $post = $this->validation->filter($_POST, INPUT_POST);

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