<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Fuentes -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">

        <!-- Conexion con css -->
        <link rel="stylesheet" href="estilos.css">
        <title>Inicio de sesión</title>
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

                <!-- Formulario de usuario -->
                <form action="./index.php?controlador=C_Asignaturas&metodo=listar_clases" method="POST" id="cajaAnadir">

                    <h1>INICIO DE SESION</h1>

                    <div id="cajaAsignatura">
                        <label>Correo</label>
                        <input type="email" name="correo" placeholder="Introduzca su correo">
                    </div>

                    <div id="cajaAsignatura">
                        <label>Contraseña</label>
                        <input type="password" name="password" placeholder="Introduzca su contraseña">
                    </div>

                </form>

            </div>

            <!-- Botón enviar -->
            <div id="botonEnviar">
                <input type="submit" value="Iniciar sesión" form="cajaAnadir">
            </div>
        </div>

        <!-- Pie de pagina -->
        <footer>
            <h1>Autor: Iván Rodríguez Gómez - Landero</h1>
        </footer>

    </body>
</html>