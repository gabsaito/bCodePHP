<?php

namespace system\core
{
    use system\database\Connection;

    class Model
    {
        /**
         * @var object $connection
         * Guarda a inst�ncia da classe de conex�o
         */
        public $connection;

        /**
         * Met�do construtor
         * Inst�ncia a classe Connection
         */
        public function __construct()
        {
            $this->connection = new Connection();
        }
    }
}