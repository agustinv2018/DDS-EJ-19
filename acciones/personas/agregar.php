<?php   
header('Content-Type: application/json');

require_once '../../modelo/persona.php';
require_once 'responses/agregarResponse.php';
require_once '../../configuracion/database.php';

$json = file_get_contents('php://input',true);
$req = json_decode($json);

$personaAgregar = new Persona();
$personaAgregar->Nombre = $req->Nombre;
$personaAgregar->Apellido = $req->Apellido;
$personaAgregar->NroDocumento = $req->NroDocumento;
$personaAgregar->Direccion = $req->Direccion;
$personaAgregar->Email = $req->Email;
$personaAgregar->Agregar();

$resp = new AgregarResponse();
$resp->IsOk = true;

echo json_encode($resp);