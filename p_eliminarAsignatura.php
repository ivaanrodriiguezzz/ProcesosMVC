<?php

    require_once __DIR__."/../controlador/c_asignaturas.php";

    $controlador = new C_Asignaturas();

    $datos = $controlador->eliminar_asignatura();
    $clase = $controlador->listar_clase();

    require_once $controlador->vista;

?>