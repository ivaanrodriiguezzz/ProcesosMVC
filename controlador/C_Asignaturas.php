<?php

    require_once __DIR__ . "/../modelo/M_Asignaturas.php";

    class C_Asignaturas{
        
        public $vista;
        
        function inicio_de_sesion(){

            $this->vista=__DIR__ . "/../vista/v_inicioDeSesion.php";

            if(isset($_POST['correo']) && isset($_POST['password'])){
                
                $correo=$_POST['correo'];
                $password=$_POST['password'];

                $modelo = new M_Asignaturas();
                $idUsuario = $modelo->validar_usuario($correo, $password);

                if($idUsuario){

                    session_start();
                    $_SESSION['idUsuario'] = $idUsuario;

                    header("Location: ./index.php?controlador=C_Asignaturas&metodo=listar_clases");
                    exit();

                }

            }

        }

        function listar_asignaturas(){

            $this->vista=__DIR__ . "/../vista/v_listarAsignaturas.php";
            
            if(isset($_POST['idClase'])){
                $idClase=$_POST['idClase'];
            }
            else if(isset($_GET['idClase'])){
                $idClase=$_GET['idClase'];
            }

            if(isset($idClase)){
                $modelo = new M_Asignaturas();

                $datos=$modelo->mostrar_asignaturas($idClase);

            }

            return $datos;

        }

        function pedirDatosAsignatura(){

            $this->vista=__DIR__ . "/../vista/v_pedirDatosAsignatura.html";

        }

        function guardar_asignatura(){

            $this->vista=__DIR__ . "/../vista/v_guardarAsignatura.php";

            if(isset($_POST['idClase']) && isset($_POST['Asignatura']) && isset($_POST['Abreviatura'])){

                $idClase=$_POST['idClase'];
                $nombre=$_POST['Asignatura'];
                $abreviatura=$_POST['Abreviatura'];

                $modelo = new M_Asignaturas();
                $modelo->guardar_asignatura($idClase, $nombre, $abreviatura);

            }

        }

        function listar_clases(){

            $this->vista=__DIR__ . "/../vista/v_listarClases.php";

            $modelo = new M_Asignaturas();
            $datos=$modelo->mostrar_clases();

            return $datos;

        }

        function modificar_asignatura(){

            $this->vista=__DIR__ . "/../vista/v_modificarAsignatura.php";

            if(isset($_POST['idClase'])){
                $idClase=$_POST['idClase'];
                echo $idClase;
            }
            else if(isset($_GET['idClase'])){
                $idClase=$_GET['idClase'];
                echo $idClase;
            }
            else{
                echo "No se ha recogido el idClase";
            }


            $modelo = new M_Asignaturas();

            if(isset($_POST['idAsignatura']) && isset($_POST['Asignatura']) && isset($_POST['Abreviatura'])){
                $idAsignatura=$_POST['idAsignatura'];
                $nombre=$_POST['Asignatura'];
                $abreviatura=$_POST['Abreviatura'];

                $modelo->modificar_asignatura($idAsignatura, $nombre, $abreviatura);
            }

            // $datos = $modelo->mostrar_asignaturas($idClase);

            // return $datos;
        }

        function eliminar_asignatura(){

            $this->vista=__DIR__ . "/../vista/v_eliminarAsignatura.php";

            // if(isset($_POST['idClase'])){
            //     $idClase=$_POST['idClase'];
            // }
            // else if(isset($_GET['idClase'])){
            //     $idClase=$_GET['idClase'];
            // }

            // $modelo = new M_Asignaturas();

            // $clase=$modelo->mostrar_clase($idClase);

            // if(isset($_POST['idAsignatura'])){
            //     $idAsignatura=$_POST['idAsignatura'];
            //     $modelo->eliminar_asignatura($idAsignatura);
            // }

            // $datos = $modelo->mostrar_asignaturas($idClase);

            // return $datos;
        }
    }
?>