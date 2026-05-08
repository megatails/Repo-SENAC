<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../../config/Database.php';
include_once '../../models/Bebida.php';

$database = new Database();
$db = $database->getConnection();

$bebida = new Bebida($db);
$bebida->idBebida = isset($_GET['id']) ? $_GET['id'] : null;

if ($_SERVER["REQUEST_METHOD"] === 'GET') {
    if ($bebida->idBebida) {
       $bebida->get();

       $bebidaArray = array(
        "id" => $bebida->idBebida,
        "nome" => $bebida->nome,
        "valor" => $bebida->valor,
        "tipo" => $bebida->tipo,
        "volumeMl" -> $bebida->volumeMl
       );

       echo json_encode($bebidaArray, JSON_PRETTY_PRINT);

       http_response_code(200);
    }
    else {
        
    }
}
else 
{
    
}