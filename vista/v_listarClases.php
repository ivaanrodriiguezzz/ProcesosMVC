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
        <title>Horario 2ºDAW</title>
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

        <!-- Main -->
        <div id="main">
            <form action="./index.php?controlador=C_Asignaturas&metodo=listar_asignaturas" method="POST">
                <div id="cajaClase">
                    <h1>CLASE</h1>
                    <select name="idClase" required>
                        <?php
                            foreach($datos as $fila){
                                echo "<option value='".$fila['idClase']."'>".$fila['Nombre']."</option>";
                            }
                        ?>
                    </select>
                </div>

                <div id="botonEnviar">
                    <input type="submit" value="Aceptar">
                </div>
            </form>
        </div>
        
        <!-- Pie de pagina -->
        <footer>
            <h1>Autor: Iván Rodríguez Gómez - Landero</h1>
        </footer>
        
    </body>
</html>