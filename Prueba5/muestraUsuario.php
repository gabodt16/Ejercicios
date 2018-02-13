<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/estilos.css">
        <title>Busqueda de Usuarios</title>
    </head>

    <body>
       
       <p>Los Ids que hay disponible son: 1, 75, 83, 84 y 85</p>
       <p>El error es solo porque está en espera de introducir el ID correspindiente</p>
       
        <form action="muestraUsuario.php" method="get">
            
            <label for="id">Id del Usuario que desea buscar</label>
            <input type="text" name="id" id="id">
            <br><br>
            
            <input type="submit" value="Enviar">
            
        </form>
        
        <?php
        
            $conector = new mysqli('localhost', 'root', '', 'juegos');
            if($conector->connect_errno){
                echo "Fallo al conectar a MySQL: ". $conector->connect_errno;
            }else{
                $ids=$_GET["id"];
                $consulta="SELECT* From usuarios WHERE id='".$ids."'";
                echo $consulta. "<br>";
            
                $resultado = $conector->query($consulta);
        ?>
               
        <div id="tabla1">
            <table>

                <thead>
                    <tr> <td>ID</td> <td>Nombre</td> <td>Apellido</td> <td>Edad</td> <td>Curso</td> <td>Correo</td> <td>Puntuación</td></tr>
                </thead>

                <tbody>
               
        <?php
                
                foreach ($resultado as $fila){
                    echo "<tr class='lineas'>". "<td>". $fila['id']. "</td>". "<td>". $fila['Nombre']. "</td>". "<td>". $fila['Apellido']. "</td>". "<td>". $fila['Edad']. "</td>".  "<td>". $fila['Curso']. "<td>". $fila['Correo']. "</td>". "</td>". "<td>". $fila['Puntuacion']. "</td>"."</tr>";
                }
        
            }
        ?>
        
                </tbody>
            </table> <!-- fin de la tabla 1 para estructurar la consulta de php -->
        </div>
        
        <a href="insertarUsuario.php">Añadir otro usuario</a>
        
    </body>
</html>