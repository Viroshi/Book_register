<?php
#controller.conexaobd.class.php

//Classe para controle da conexão com o banco de dados
class DatabaseConnection
{
    private $host = "127.0.0.1";
    private $dbname = "biblioteca";
    private $username = "root";
    private $password = "";
    private $conn;

    public function __construct()
    {
        $this->conn = new PDO (
            "mysql:host={$this->host}; dbname={$this->dbname}; charset=utf8",
            $this->username,
            $this->password
        );

        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getConnection()
    {
        return $this->conn;
    }

    public function __destruct()
    {
        $this->conn = NULL;
    } 
}


?>