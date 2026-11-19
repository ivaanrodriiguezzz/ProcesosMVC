<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="estilos.css">
        <title>Modificar Asignaturas</title>
    </head>
    <body>

        <header>
            <div id="tituloIzquierda">
                <h1>MODIFICAR ASIGNATURAS</h1>
            </div>
            <div id="interfazDerecha">
                <a href="#">ivaanrodriiguezzz</a>
                <a href="#">&#9881</a>
            </div>
        </header>

        <div id="main">
            <div id="contenedorCentro">
                
                <!-- FORMULARIO PARA MODIFICAR -->
                <form action="./index.php?controlador=C_Asignaturas&metodo=modificar_asignatura" method="POST">
                    <div id="cajaAnadir">
                        <h1>MODIFICAR ASIGNATURA</h1>
                        
                        <input type="hidden" name="idClase" value="<?php echo $clase['idClase']; ?>">

                        <div id="cajaAsignatura">
                            <select name="idAsignatura" required>
                                <option disabled selected>Seleccione la asignatura</option>
                                <?php
                                    foreach($datos as $fila){
                                        echo "<option value='".$fila['idAsignatura']."'>".$fila['Nombre']."</option>";
                                    }
                                ?>
                            </select>
                        </div>

                        <div id="cajaAbreviatura">
                            <label>Asignatura: </label>
                            <input type="text" name="Asignatura" placeholder="Nuevo nombre" required>
                        </div>

                        <div id="cajaAbreviatura">
                            <label>Abreviatura: </label>
                            <input type="text" name="Abreviatura" placeholder="Nueva Abreviatura" required>
                        </div>
                    </div>
                    <div id="botonEnviar">
                        <input type="submit" value="Modificar">
                    </div>
                </form>
            </div>
            
        </div>

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