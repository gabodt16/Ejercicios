<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/estilos.css">
        <title>Regístrate</title>
    </head>

    <body>
       
       <h1>Regístrate</h1>
       
       <div class="formulario">
           
            <form action="listadoUsuarios.php" method="post">

                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" autofocus>

                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido">
                <br><br>

                <label for="edad">Edad</label>
                <input type="text" name="edad" id="edad">

                <label for="curso">Curso</label>
                <input type="text" name="curso" id="edad">
                <br><br>

                <input type="submit" value="Enviar">

            </form>
        </div>
    </body>
</html>