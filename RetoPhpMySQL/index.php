<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Reto de base de datos en php</title>
        <STYLE TYPE="text/css">
            <!-- 
                table, tbody, td, tr{
                    border: solid 1px;
                    border-collapse: collapse;
                }

                thead{
                    background-color: #DCF7FF;
                }

                td{
                    padding: 5px;
                }
            -->
        </STYLE>
    </head>

    <body>
           
            <?php
        
            $conector = new mysqli("localhost", "root", "", "world");
            if($conector->connect_errno){
                echo "Fallo al conectar a MySQL: " . $conector->connect_error;
            }else{
                //interacción con la base de datos
                
                $resultado = $conector->query("SELECT * FROM country WHERE Continent = 'South America' ORDER BY SurfaceArea DESC");
                
                /*
                while($fila=$resultado->fetch_assoc()){
                    echo "Pais ".$fila['Name']."<br>";
                }*/
            ?>
               <h1>Paises del mundo</h1>
            
            <!-- Parte de la tabla para ordenar y estructurar de mejor manera la consulta de php -->    
            <table>
                <thead>
                    <tr><td>Nombre</td> <td>Continente</td> <td>Superficie</td></tr>
                </thead>

                <tbody>
                
                
                <?php
                foreach($resultado as $fila){
                    echo "<tr>". "<td>". $fila['Name']. "</td>". "<td>". $fila['Continent']. "</td>". "<td>". $fila['SurfaceArea']. "</td>". "</tr>";
                }

            }
            ?>
            
                </tbody>
            </table> <!-- fin de la tabla para estructurar la consulta de php -->
    </body>
</html>




















