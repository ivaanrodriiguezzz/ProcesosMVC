<?php
    //Los datos que le damos aqui son para conectar con nuestra base de datos
    //previamente creada en phpmyadmin que se llama Servidor
    
    class Conexion{
        private $servidor="localhost";
        private $usuario="root";
        private $password="";
        private $bbdd="Horario";
        public $conexion;

        public function __construct(){
            //Hacemos la conexion con la base de datos pasandole los datos de configdb.php
            $this->conexion = new mysqli($this->servidor,$this->usuario,$this->password,$this->bbdd);
        }
    }
    
?>