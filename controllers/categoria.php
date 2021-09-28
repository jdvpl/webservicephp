<?php
// para poder enviar paramentros
    header('Content-Type: application/json');

    require_once("../config/conexion.php");
    require_once("../models/Categoria.php");
    $categoria=new Categoria();


    // para el body
    $body=json_decode(file_get_contents('php://input'), true);

    switch($_GET["op"]){
        case "GetAll":
            $datos=$categoria->get_categoria();
            // trae esto en un json
            echo json_encode($datos);
        break;

        case "GetId":
            $datos=$categoria->get_categoria_x_id($body['cat_id']);
            // trae esto en un json
            echo json_encode($datos);
        break;
        case "add":
            $datos=$categoria->insert_categoria($body['cat_nom'], $body['cat_obs'],$body['est']);
            // trae esto en un json
            echo json_encode("Se agrego una nueva categoria");
        break;

    }

?>