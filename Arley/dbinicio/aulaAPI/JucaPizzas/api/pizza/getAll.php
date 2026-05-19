<?php 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../../config/Database.php';
include_once '../../models/Pizza.php';

$database = new Database();
$db = $database->getConnection();
$pizza = new Pizza($db);

    $stmt = $pizza->getAll();

    $num = $stmt->rowCount();

    if ($num > 0) {

        $pizzas_arr = array();
 
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            extract($row);
 
            $pizza_item = array(

                "id" => $idPizza,

                "nome" => $nome,

                "ingredientes" => $ingredientes,

                "valor" => $valor

            );
 
            array_push($pizzas_arr, $pizza_item);

        }

        http_response_code(200);

        echo json_encode($pizzas_arr);

    } else {

        http_response_code(404);

        echo json_encode(

            array("message" => "Nenhuma pizza encontrada.")

        );

    }
 