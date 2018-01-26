<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/estilos.css">
        <title>Paises del mundo</title>
    </head>

    <body>
       
       <div class="barra">
           <div class="contenedor clearfix">
               <div class="logo">
                   <a href="index.php"><img src="img/logo2.PNG" alt="Logo country"></a>
               </div>
               
               <nav class="navPrincipal">
                   <a href="superficie.php">Superficie</a>
                   <a href="continente.php">Continente</a>
                   <a href="Independencia.php">Año de independencia</a>
               </nav>
           </div>
       </div>
       
       <div class="desplegable">
           <span></span>
           <span></span>
           <span></span>
       </div>
       
       <h1>Organizados por superficie</h1>
       
        <?php
        
            $conector = new mysqli("localhost", "root", "", "world");
            if($conector -> connect_errno){
                echo "Fallo al conectar a MySQL: " . $conector->connect_error;
            }else{
                $resultado = $conector->query("SELECT * FROM country ORDER BY SurfaceArea DESC");
            
        
        ?>
        <div id="tabla1">
            <table class="tabla1">

                <thead>
                    <tr><td>Num</td> <td>Nombre</td> <td>Continente</td> <td>Superficie</td></tr>
                </thead>

                <tbody>


        <?php
               $cont = 1;
                foreach($resultado as $fila){
                    if($cont <= 120){
                        if (($cont % 2) == 0){  
                            echo "<tr class='lineas'>". "<td>". $cont. "</td>". "<td>". $fila['Name']. "</td>". "<td>". $fila['Continent']. "</td>". "<td>". $fila['SurfaceArea']. "</td>". "</tr>";
                        }else{
                            echo "<tr>". "<td>". $cont. "</td>". "<td>". $fila['Name']. "</td>". "<td>". $fila['Continent']. "</td>". "<td>". $fila['SurfaceArea']. "</td>". "</tr>";
                        }
                        
                    }
                    $cont++;
                }
            }
        ?>
                </tbody>
            </table> <!-- fin de la tabla 1 para estructurar la consulta de php -->
        </div>
        
        <div id="tabla2">
            <table>

                <thead class="tabla2">
                    <tr><td>Num</td> <td>Nombre</td> <td>Continente</td> <td>Superficie</td></tr>
                </thead>

                <tbody>


        <?php
               $cont = 1;
                foreach($resultado as $fila){
                    if($cont > 120){
                        if (($cont % 2) == 0){  
                            echo "<tr class='lineas'>". "<td>". $cont. "</td>". "<td>". $fila['Name']. "</td>". "<td>". $fila['Continent']. "</td>". "<td>". $fila['SurfaceArea']. "</td>". "</tr>";
                        }else{
                            echo "<tr>". "<td>". $cont. "</td>". "<td>". $fila['Name']. "</td>". "<td>". $fila['Continent']. "</td>". "<td>". $fila['SurfaceArea']. "</td>". "</tr>";
                        }
                    }
                    $cont++;
                }
            
        ?>
                </tbody>
            </table> <!-- fin de la tabla 2 para estructurar la consulta de php -->
        </div>
        
        
        <footer>
            <div class="contenedorFooter">
                <nav class="navFooter">
                    <a href="superficie.php">Superficie</a>
                    <a href="continente.php">Continente</a>
                    <a href="Independencia.php">Año de independencia</a>
                </nav>
            </div>
        </footer>

    </body>
</html>