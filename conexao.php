<?php

class Conexao{
    public $banco;
    public function __construct(){
        $pdo = new PDO("sqlite:banco.sqlite");
        $this->banco = $pdo;
    }

    public function obterBanco(){
        return $this->banco;
    }
}