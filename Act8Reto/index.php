<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <style>
        <!--  
            h1, h2, form{
                text-align: center;
            }

            h1{
                margin-top: 50px;
            }

            table, tbody, td, tr{
                border: solid 1px;
                border-collapse: collapse;
            }

            table{
                margin: 80px auto;

            }

            thead{
                background-color: #9BBDDF /*#97AABE*/;
            }

            td{
                padding: 5px;
            }

            .lineas{
                background-color: #DCF7FF;
            }

            a.volver{
                text-align: center;
                display: block;
                text-decoration: none;
                font-size: 15px;
            }
        -->
        </style>
        <title>Formulario de peticion</title>
    </head>

    <body>
       
       <h1>Buscar en la base de datos</h1>
       
       <h2>Método Post</h2>
       
        <form action="recibe.php" method="post">
            
            <label for="continente">Elige un continente: </label>
            <input type="text" autofocus id="continente" name="continent">
            <br><br>
            
            <label for="superficie">Superficie mayor de: </label>
            <input type="text" id="superficie" name="surfacearea">
            <br><br>
            
            <input type="submit" value="Buscar">
            
        </form>
    </body>
</html>