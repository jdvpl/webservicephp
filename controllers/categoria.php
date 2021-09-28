<?php
    require_once("../config/conexion.php");
    require_once("../models/Categoria.php");
    $categoria=new Categoria();

    switch($_GET["op"]){
        case "GetAll":
            $datos=$categoria->get_categoria();
            // trae esto en un json
            echo json_encode($datos);
        break;
    }

?>