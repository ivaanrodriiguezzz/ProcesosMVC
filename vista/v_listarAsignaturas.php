<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Fuentes -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">

        <!-- Conexion con css -->
        <link rel="stylesheet" href="estilos.css">
        <title>Horario</title>
    </head>
    <body>

        <!-- Cabecera -->
        <header>
            <!-- ALTA DE HORARIOS -->
            <div id="tituloIzquierda">
                <h1>ALTA DE HORARIOS</h1>
            </div>
            <!-- ivaanrodriiguezzz configuracion -->
            <div id="interfazDerecha">
                <a href="#">ivaanrodriiguezzz</a>
                <a href="#">&#9881</a>
            </div>
        </header>

        <!-- MAIN -->
        <div id="main">
            <div id="contenedorCentro">
                <!-- 1. Formulario principal -->
                <form action="..//p_guardarAsignatura.php" method="POST" id="cajaAnadir">
                    
                    <h1>CREAR HORARIO</h1>

                    <div id="cajaAsignatura">
                        <label>Asignatura</label>
                        <input type="hidden" name="idClase" value="<?php echo $clase['idClase']; ?>">
                        <select name="idAsignatura" required>
                            <option disabled selected>Seleccione la asignatura</option>
                            <?php
                                foreach($datos as $fila){
                                    echo "<option value='".$fila['idAsignatura']."'>".$fila['Nombre']."</option>";
                                }
                            ?>
                        </select>
                        <!-- Solo el enlace para añadir -->
                    </div>

                    <div id="cajaHorario">
                        <div id="cajaDia">
                            <label id="labelDia">Dia</label>
                            <input type="text" id="inputDia" value="Lunes" readonly>
                            <input type="hidden" name="dia" value="Lunes">
                        </div>

                        <div id="cajaHora">
                            <label id="labelHora">Hora</label>
                            <input type="text" id="inputHora" value="1º hora" readonly>
                            <input type="hidden" name="hora" value="08:15:00">
                        </div>
                    </div>
                </form>
                
                <a href="./index.php?controlador=C_Asignaturas&metodo=pedirDatosAsignatura&idClase=<?php echo $clase['idClase']; ?>" class="boton-flotante boton-anadir">+</a>

                <a href="./index.php?controlador=C_Asignaturas&metodo=modificar_asignatura&idClase=<?php echo $clase['idClase']; ?>" class="boton-flotante boton-modificar">&#9998;</a>

                <a href="./index.php?controlador=C_Asignaturas&metodo=eliminar_asignatura&idClase=<?php echo $clase['idClase']; ?>" class="boton-flotante boton-eliminar">&#128465;</a>
            </div>

            <!-- Botón enviar -->
            <div id="botonEnviar">
                <input type="submit" value="Siguiente" form="cajaAnadir">           
            </div>
        </div>

        <!-- Pie de pagina -->
        <footer>
            <div id="imagenAtras">
                <a href="./index.php?controlador=C_Asignaturas&metodo=listar_clases">
                    <img src="imagenes/imagen1.png" alt="imagen1.png">
                </a>
            </div>
            <h1>Autor: Iván Rodríguez Gómez - Landero</h1>
        </footer>
        
    </body>
</html>