<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../../models/Bebida.php';
include_once '../../config/Database.php';

$database = new Database();

$db = $database->getConnection();

$bebida = new Bebida($db);

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $stmt = $bebida->getAll();

    $num = $stmt->rowCount();

    if ($num > 0) 
    {
        $bebidasArray = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            extract($row);

            $bebidaItem = array(
                "id" => $idBebida,
                "nome" => $nome,
                "tipo" => $tipo,
                "valor" => $valor,
                "volumeMl" => $volumeMl
            );

            array_push($bebidasArray, $bebidaItem);
        }

        http_response_code(200);
        echo json_encode($bebidasArray);
    }
    else
    {
        http_response_code(404);
        
        echo json_encode(
            array("mensagem" => 'Nenhuma bebida encontrada!')
        );
    }
}
else
{
    http_response_code(405);

    echo json_encode(
        array("mensagem" => 'Metodo não permitido.')
    );
}