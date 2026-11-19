<?php

    require_once __DIR__."/../controlador/C_Asignaturas.php";

    $controlador = new C_Asignaturas();

    $controlador->guardar_asignatura();

    require_once $controlador->vista;

?>