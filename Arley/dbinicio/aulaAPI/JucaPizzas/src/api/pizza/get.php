<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../../config/Database.php';
include_once '../../models/Pizza.php';

$database = new Database();
$db = $database->getConnection();

$pizza = new Pizza($db);
$pizza->idPizza = isset($_GET['id']) ? $_GET['id'] : null;

if ($_SERVER["REQUEST_METHOD"] === 'GET') {
    if ($pizza->idPizza) {
        $pizza->get();


    $pizzaArray = array(
        "id" => $pizza->idPizza,
        "nome" => $pizza->nome,
        "valor" => $pizza->valor,
        "ingredientes" => $pizza->ingredientes
    );

    if(empty($pizza->nome)) {
        http_response_code(404);
        echo json_encode(array("mensagem" => 'pizza não encontrada!'));
        exit;
    }

    echo json_encode($pizzarray, JSON_PRETTY_PRINT);

    http_response_code(200);
    }
    else {
        http_response_code(404);
        echo json_encode(array("mensagem" => 'pizza não informada!'));
    }
}
else 
{
http_response_code(405);
echo json_encode(array("mensagem" => 'metodo não permitido.'));
}