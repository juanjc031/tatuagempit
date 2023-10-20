<?php
session_start();

include_once("../data.trait.php");

$service = new Service();

$result = $service->BuscarTatuador();

if (!$result["resultado"]) {
  http_response_code(400);
}

echo json_encode($result);
