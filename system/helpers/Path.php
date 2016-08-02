<?php

namespace system\helpers
{
    class Path
    {
        public static function img($path)
        {
            echo str_replace(DS, "/", URL_BASE . IMGS_PATH) . str_replace(DS, "/", $path);
        }

        public static function css($path)
        {
            echo str_replace(DS, "/", URL_BASE . CSS_PATH) . str_replace(DS, "/", $path);
        }

        public static function js($path)
        {
            echo str_replace(DS, "/", URL_BASE . JS_PATH) . str_replace(DS, "/", $path);
        }
    }
}