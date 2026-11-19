<?php

    require_once __DIR__."/../controlador/C_Asignaturas.php";

    $controlador = new C_Asignaturas();

    $datos=$controlador->listar_clases();

    require_once $controlador->vista;

?>