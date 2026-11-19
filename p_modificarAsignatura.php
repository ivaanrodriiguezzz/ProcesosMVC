<?php

    require_once __DIR__."/../controlador/C_Asignaturas.php";

    $controlador = new C_Asignaturas();

    $datos=$controlador->modificar_asignatura();
    $clase=$controlador->listar_clase();

    require_once $controlador->vista;
?>