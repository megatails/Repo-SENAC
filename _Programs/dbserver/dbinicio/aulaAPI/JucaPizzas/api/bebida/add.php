<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once '../../config/Database.php';
include_once '../../models/Bebida.php';

$database = new Database();
$db = $database->getConnection();

$bebida = new Bebida($db);

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    try{
        $data = json_decode(file_get_contents("php://input"));
        
        if(!empty($data->nome) && !empty($data->tipo) && !empty($data->valor && !empty($data->volumeMl))){
            $bebida->nome = $data->nome;
            $bebida->tipo = $data->tipo;
            $bebida->valor = $data->valor;
            $bebida->volumeMl = $data->volumeMl;

            if ($bebida->add()) {
                http_response_code(201);
                echo json_encode(array('Mensagem' => 'Bebida criada com sucesso!'));
            } else {
                http_response_code(400);
                echo json_encode(array('Mensagem' => 'Não foi possivel criar a bebida.'));
            }
        }else {
            http_response_code(400);
            echo json_encode(array('Mensagem' => 'Dados Imcompletos. Não foi possivel criar a bebida'));
        }
    } catch (Exception $e){
        echo json_encode(array("erro" => $e->getMessage()));
    }
} else {
    http_response_code(400);
    echo json_encode(array("erro" => "Método não suportado!"));
}