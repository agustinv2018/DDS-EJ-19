<?php   
header('Content-Type: application/json');

require_once '../../modelo/persona.php';
require_once 'responses/eliminarResponse.php';
require_once 'request/eliminarRequest.php';
require_once '../../configuracion/database.php';

$json = file_get_contents('php://input',true);
$req = json_decode($json);

$personaEliminar = new Persona();
$personaEliminar->Id = $req->Id;
$personaEliminar->Eliminar();

$resp = new EliminarResponse();
$resp->IsOk = true;

echo json_encode($resp);