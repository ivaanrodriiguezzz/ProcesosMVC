<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="estilos.css">
        <title>Eliminar Asignaturas</title>
    </head>
    <body>

        <header>
            <div id="tituloIzquierda">
                <h1>ELIMINAR ASIGNATURAS</h1>
            </div>
            <div id="interfazDerecha">
                <a href="#">ivaanrodriiguezzz</a>
                <a href="#">&#9881</a>
            </div>
        </header>

        <div id="main">
            <div id="contenedorCentro">
                
                <!-- FORMULARIO PARA ELIMINAR -->
                <form action="./index.php?controlador=C_Asignaturas&metodo=eliminar_asignatura" method="POST">
                    
                    <div id="cajaAnadir">

                        <h1>ELIMINAR ASIGNATURA</h1>
                        <input type="hidden" name="idClase" value="<?php echo $clase['idClase']; ?>">
                        <div id="cajaAsignatura">
                            <label>Asignatura</label>
                            <select name="idAsignatura" required>
                                <option disabled selected>Seleccione la asignatura a eliminar</option>
                                <?php
                                    foreach($datos as $fila){
                                        echo "<option value='".$fila['idAsignatura']."'>".$fila['Nombre']."</option>";
                                    }
                                ?>
                            </select>
                        </div>

                    </div>
                    
                    <!-- Botón de eliminar (usa la clase para el color rojo) -->
                    <div id="botonEnviar" class="boton-eliminar">
                        <input type="submit" value="Eliminar">
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