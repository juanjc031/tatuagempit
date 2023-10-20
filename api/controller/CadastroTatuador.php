<?php

include_once("../data.trait.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$telefone = $_POST["tel"];
$insta = $_POST["insta"];
$carac = $_POST["carac"];

$service = new Service();

$result = $service->CadastrarTatuador($nome, $email, $senha, $usuario, $telefone, $insta, $carac);

if (!$result["resultado"]) {
  http_response_code(400);
}

echo json_encode($result);
