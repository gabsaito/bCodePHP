<?php

namespace system\core
{
    use system\database\Connection;

    class Model
    {
        /**
         * @var object $connection
         * Guarda a instância da classe de conexão
         */
        public $connection;

        /**
         * Metódo construtor
         * Instância a classe Connection
         */
        public function __construct()
        {
            $this->connection = new Connection();
        }
    }
}