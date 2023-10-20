<?php
session_start();

include_once("../data.trait.php");

$estilo = $_POST["estilo"];
$tamanho = $_POST["tamanho"];

$service = new Service();

if (!isset($estilo) && !isset($tamanho)) {
  $result = $service->BuscarTatuador($estilo, $tamanho);
} else {
  $result = $service->BuscarTatuador();
}

if (!$result["resultado"]) {
  http_response_code(400);
}

echo json_encode($result);
