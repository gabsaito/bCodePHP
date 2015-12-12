<?php

namespace system\core
{
    use system\database\Connection;

    class Model
    {
        /**
         * @var object
         * Guarda uma inst�ncia da classe Connection
         */
        public $connection;

        /**
         * Inst�ncia a classe Connection
         */
        public function __construct()
        {
            $this->connection = new Connection();
        }
    }
}