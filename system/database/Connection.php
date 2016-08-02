<?php

namespace system\database
{
    class Connection
    {
        /**
         * @var object
         * Guarda a conexão com o banco de dados
         */
        private static $connection;

        /**
         * @return object PDO
         * Caso exista retorna a conexão com o banco, se não existir realiza a conexão antes de retorna-lá
         */
        public static function getConnection()
        {
            if(is_null(self::$connection))
            {
                try
                {
                    $dsn = DB_DRIVER . ':host=' . DB_HOST . ';dbname=' . DB_NAME;
                    self::$connection = new \PDO($dsn, DB_USER, DB_PASS);
                    self::$connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                    self::$connection->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
                    self::$connection->exec('set names utf8');
                }
                catch(\PDOException $e)
                {
                    echo $e->getMessage();
                }
            }

            return self::$connection;
        }
    }
}