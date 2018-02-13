<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/estilos.css">
        <title></title>
    </head>

    <body>
        <?php
            $cont = 1;
        
            $conector = new mysqli('localhost', 'root', '', 'juegos');
            if($conector->connect_errno){
                echo "Fallo al conectar a MySQL: ". $conector->connect_errno;
            }else{
                $nombre=$_POST["nombre"];
                $apellido=$_POST["apellido"];
                $edad=$_POST["edad"];
                $curso=$_POST["curso"];
                $correo=$_POST["correo"];
                $consulta="INSERT INTO usuarios (Nombre, Apellido, Edad, Curso, Correo) VALUES('".$nombre."', '".$apellido."', '".$edad."', '".$curso."', '".$correo."')";
                echo $consulta. "<br>";
                $consulta2="SELECT * FROM usuarios";
            
                $resultado = $conector->query($consulta);
                $resultado1 = $conector->query($consulta2);
                
                
            ?>
            
            <div id="tabla1">
            <table>

                <thead>
                    <tr> <td>ID</td> <td>Nombre</td> <td>Apellido</td> <td>Edad</td> <td>Curso</td> <td>Correo</td> <td>Puntuación</td></tr>
                </thead>

                <tbody>
            
            
            <?php

                foreach($resultado1 as $fila){
                    if (($cont % 2) == 0){
                            if($fila['Puntuacion'] == NULL){
                                echo "<tr class='lineas'>". "<td>". $fila['id']. "</td>". "<td>". $fila['Nombre']. "</td>". "<td>". $fila['Apellido']. "</td>". "<td>". $fila['Edad']. "</td>".  "<td>". $fila['Curso']. "</td>". "<td>". $fila['Correo']. "</td>". "<td>". 0 . "</td>"."</tr>";
                            }else{
                                echo "<tr class='lineas'>". "<td>". $fila['id']. "</td>". "<td>". $fila['Nombre']. "</td>". "<td>". $fila['Apellido']. "</td>". "<td>". $fila['Edad']. "</td>".  "<td>". $fila['Curso']. "<td>". $fila['Correo']. "</td>". "</td>". "<td>". $fila['Puntuacion']. "</td>"."</tr>";
                            }
                    }else{
                        if($fila['Puntuacion'] == NULL){
                            echo "<tr>". "<td>". $fila['id']. "</td>". "<td>". $fila['Nombre']. "</td>". "<td>". $fila['Apellido']. "</td>". "<td>". $fila['Edad']. "</td>".  "<td>". $fila['Curso']. "<td>". $fila['Correo']. "</td>". "</td>". "<td>". 0 . "</td>"."</tr>";
                        }else{
                            echo "<tr>". "<td>". $fila['id']. "</td>". "<td>". $fila['Nombre']. "</td>". "<td>". $fila['Apellido']. "</td>". "<td>". $fila['Edad']. "</td>".  "<td>". $fila['Curso']. "<td>". $fila['Correo']. "</td>". "</td>". "<td>". $fila['Puntuacion']. "</td>"."</tr>";
                        }
                    }
                    $cont++;
                }
                
            }
        
            /* DELETE FROM `usuarios` WHERE `usuarios`.`id` = 35;*/        
            ?>
        
                </tbody>
            </table> <!-- fin de la tabla 1 para estructurar la consulta de php -->
        </div>
           
        <a href="insertarUsuario.php">Añadir otro usuario</a>
    </body>
</html>