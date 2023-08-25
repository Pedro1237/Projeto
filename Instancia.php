<?php
require "Autor.php";
require "conexao.php";

$Zezin = new Autor("Zezinho", "21974758664", "Peee@gmail.com", "Pterosauro");

$conexao = new Conexao();
$banco = $conexao->obterBanco(); 

$tabela = "CREATE TABLE IF NOT EXISTS Autor (
    NomeAutor TEXT,
    EmailAutor TEXT,
    TelAutor TEXT,
    EndAutor TEXT,
    primary key(NomeAutor)
)";

$banco->exec($tabela);

$dadoZezin = "INSERT INTO Autor (NomeAutor, EmailAutor, TelAutor, EndAutor) VALUES (:nome, :email, :telefone, :endereco)";

$dado = $banco->prepare($dadoZezin);

$nome = $Zezin->obterNome();
$email = $Zezin->obterEmail();
$telefone = $Zezin->obterTelefone();
$endereco = $Zezin->obterEndereco();

$dado->bindParam(':nome', $nome);  
$dado->bindParam(':email', $email); 
$dado->bindParam(':telefone', $telefone);
$dado->bindParam(':endereco', $endereco);

$dado->execute();
