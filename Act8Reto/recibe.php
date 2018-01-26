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
                font-size: 25px;
                margin-top: -50px;
            }
        -->
        </style>
        <title>Recibir datos</title>
    </head>
    <body>
        <?php
        
            $conector = new mysqli('localhost', 'root', '', 'world');
            if($conector->connect_errno){
                echo "Fallo al conectar a MySQL: ". $conector->connect.errno;
            }else{
                $continente=$_POST["continent"];
                $superficie=$_POST["surfacearea"];
                $consulta="SELECT Name, Continent, SurfaceArea FROM country WHERE Continent='". $continente ."' AND SurfaceArea > ". $superficie;
                
                echo $consulta. "<br>";
                $resultado = $conector->query($consulta);
                
        ?>
        
           
        <div id="tabla1">
            <table>

                <thead>
                    <tr><td>Nombre</td> <td>Continente</td> <td>Superficie</td></tr>
                </thead>

                <tbody>


        <?php
               $cont = 1;
                foreach($resultado as $fila){
                    if (($cont % 2) == 0){  
                        echo "<tr class='lineas'>". "<td>". $fila['Name']. "</td>". "<td>". $fila['Continent']. "</td>". "<td>". $fila['SurfaceArea']. "</td>". "</tr>";
                    }else{
                        echo "<tr>". "<td>". $fila['Name']. "</td>". "<td>". $fila['Continent']. "</td>". "<td>". $fila['SurfaceArea']. "</td>". "</tr>";
                    }
                        
                    $cont++;
                }
            }
        ?>
                </tbody>
            </table> <!-- fin de la tabla 1 para estructurar la consulta de php -->
        </div>
           
        <a href="index.php" class="volver">Volver</a>   
              
    </body>
</html> 