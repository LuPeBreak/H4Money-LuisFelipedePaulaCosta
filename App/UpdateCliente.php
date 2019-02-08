<?php 

require __DIR__."/../Config.php";
require __DIR__."/Crud/Update.php";

$update = new Update;

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

$update->build('cliente',$data,"Where id= {$_POST["id"]}");


header("location:http://$root");


?>