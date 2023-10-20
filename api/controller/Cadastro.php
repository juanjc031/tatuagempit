<?php

include_once("../data.trait.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$service = new Service();

$result = $service->Cadastrar($nome, $email, $senha, $usuario);

if (!$result["resultado"]) {
  http_response_code(400);
}

echo json_encode($result);
