<?php 

require __DIR__."/../Config.php";
require __DIR__."/Crud/insert.php";

$insert = new insert;

$data = [
    "nome" => $_POST["nome"],
    "email" =>$_POST["email"],
    "cep" =>$_POST["cep"],
    "endereco" =>$_POST["endereco"],
    "numero" =>$_POST["numero"],
    "bairro" =>$_POST["bairro"],
    "cidade" =>$_POST["cidade"],
    "uf" =>$_POST["uf"],
    "cpf" =>$_POST["cpf"]
];

$insert->build('cliente',$data);


header("location:http://$root");


?>