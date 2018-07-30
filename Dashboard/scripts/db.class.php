<?php

    class db {
        private $host = 'localhost';
        private $usuario = 'root';
        private $senha ='';
        private $database = 'nossoboteco';

        public function conecta_mysql(){
           $conn = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);
            mysqli_set_charset($conn, 'utf8');

            if(mysqli_connect_error()){
                echo 'Erro ao tentar se conectar com o BD MySql:' .mysqli_connect_error();
            }

            return $conn;
        }
    }