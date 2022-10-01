<?php   
header('Content-Type: application/json');

require_once '../../modelo/persona.php';
require_once 'responses/consultarResponse.php';
require_once '../../configuracion/database.php';

$id= $_GET['id'];
$resp= new ConsultarResponse();
$resp->Persona =Persona::Buscar($id);

echo json_encode($resp);