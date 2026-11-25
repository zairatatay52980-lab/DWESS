<?php
require "db_functions.php";

if(isset($_GET["accion"])){
    switch($_GET["accion"]){
        case "":
    }
}
echo "Hola";
$eventos = getAll();
require "views/index.view.php";