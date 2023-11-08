<?php
session_start();

include_once("../data.trait.php");

$filtroestilo = $_POST["filtroestilo"];
$filtrotamanho = $_POST["filtrotamanho"];

$service = new Service();

$result = $service->BuscarTatuador($filtroestilo, $filtrotamanho);

if (!$result["resultado"]) {
  http_response_code(400);
}

echo json_encode($result);
