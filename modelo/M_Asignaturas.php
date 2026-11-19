<?php

    require_once __DIR__ . "/../configdb.php";

    class M_Asignaturas extends Conexion{

        function validar_usuario($correo,$password){

            $consulta="SELECT idUsuario FROM Usuarios WHERE Correo='$correo' AND Password='$password'";
            $resultado=$this->conexion->query($consulta);

            if($resultado && $resultado->num_rows > 0){
                $registro=$resultado->fetch_array();
                return $registro['idUsuario'];
            }
            return false;
        }

        function mostrar_asignaturas($idClase){

            $consulta="SELECT * FROM Asignatura WHERE idClase=$idClase";
            $resultado=$this->conexion->query($consulta);

            $fila=[];

            if($resultado){
                while($registro=$resultado->fetch_array()){
                    $fila[] = $registro;
                }
            }
            return $fila;
        }

        function guardar_asignatura($idClase,$asignatura,$abreviatura){

            $consulta="INSERT INTO Asignatura (idClase,Nombre,Abreviatura) VALUES ('$idClase','$asignatura','$abreviatura')";
            $this->conexion->query($consulta);

        }
        
        function mostrar_clases(){

            $consulta="SELECT * FROM Clase";
            $resultado=$this->conexion->query($consulta);

            $fila=[];

            if($resultado){
                while($registro=$resultado->fetch_array()){
                    $fila[] = $registro;
                }
            }
            return $fila;
        }

        function modificar_asignatura($idAsignatura, $nuevoNombre, $nuevaAbreviatura){
            $consulta="UPDATE Asignatura SET Nombre='$nuevoNombre', Abreviatura='$nuevaAbreviatura' WHERE idAsignatura=$idAsignatura";
            $resultado=$this->conexion->query($consulta);
        }

        function eliminar_asignatura($idAsignatura){
            $consulta="DELETE FROM Horario WHERE idAsignatura=$idAsignatura";
            $this->conexion->query($consulta);
            
            $consulta="DELETE FROM Asignatura WHERE idAsignatura=$idAsignatura";
            $resultado=$this->conexion->query($consulta);
        }

    }

?>