<?php

namespace SRC\DB;

use PDO;
use PDOException;

class Conexao
{
    public $usuario;
    public $senha;
    public $banco;
    public $host;
    public $driver;

    public function __construct()
    {
        $this->usuario = 'root';
        $this->senha = '';
        $this->banco = 'test';
        $this->host = 'host';
        $this->driver = 'mysql';
    }

    public function abrirConexao()
    {
        try {
            $conn = new PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
}

$conn = new Conexao('root', '');
$teste->abrirConexao();
