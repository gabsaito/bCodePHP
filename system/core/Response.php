<?php

namespace system\core
{
    class Response
    {
        /**
         * @param string $uri
         * Redireciona para uma url interna (Ex.: controlador/action/param1/param2/paramN)
         */
        public static function redirectIn($uri = '')
        {
            header('Location:' . URL_BASE . $uri);
            exit;
        }

        /**
         * @param string $url
         * Redireciona para uma url externa (Ex.: http://www.google.com.br/)
         */
        public static function redirectOut($url)
        {
            header('Location:' . $url);
            exit;
        }
    }
}