<?php

namespace App\DAO;
use PDO;

abstract class DAO extends PDO{
    protected $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=" . $_ENV['db']['host'] . ";dbname=" . $_ENV['db']['database'];

        $this->conexao = new PDO($dsn, $_ENV['db']['user'], $_ENV['db']['pass'], array(PDO::MYSQL_ATTR_INIT_COMMAND =>  "SET NAMES UTF8"));
    }

}