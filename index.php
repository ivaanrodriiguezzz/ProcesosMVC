<?php

    //Si no se le pasa constructor coge uno por defecto
    if(isset($_GET['controlador'])){
        $nombreControlador=$_GET['controlador'];
    }
    else{
        $nombreControlador="C_Asignaturas";
    }

    //Añadimos el controlador al index.php
    require_once "controlador/" . $nombreControlador . ".php";

    //Creamos el constructor como objeto
    $controlador = new $nombreControlador();

    //Si no le pasamos un metodo, cogeria uno por defecto
    if(isset($_GET['metodo'])){
        $metodo = $_GET['metodo'];
    }
    else{
        $metodo='inicio_de_sesion';
    }

    $datos=$controlador->$metodo();

    require_once $controlador->vista;

?>