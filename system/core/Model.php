<?php

namespace system\core
{
    use system\database\Connection;

    class Model
    {
        /**
         * @var object
         * Guarda uma instância da classe Connection
         */
        public $connection;

        /**
         * Instância a classe Connection
         */
        public function __construct()
        {
            $this->connection = new Connection();
        }
    }
}