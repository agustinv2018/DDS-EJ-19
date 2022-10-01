<?php   
header('Content-Type: application/json');

require_once '../../modelo/persona.php';
require_once 'responses/modificarResponse.php';
require_once '../../configuracion/database.php';

$json = file_get_contents('php://input',true);
$req = json_decode($json);

$personaModificar = new Persona();
$personaModificar->Id = $req->Id;
$personaModificar->Nombre = $req->Nombre;
$personaModificar->Apellido = $req->Apellido;
$personaModificar->NroDocumento = $req->NroDocumento;
$personaModificar->Direccion = $req->Direccion;
$personaModificar->Email = $req->Email;
$personaModificar->Modificar();

$resp = new ModificarResponse();
$resp->IsOk = true;

echo json_encode($resp);
