<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/estilos.css">
        <title>Paises del mundo, por continentes</title>
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
       
       <h1>Organizado por continente</h1>
       
       <?php
        
            $conector = new mysqli("localhost", "root", "", "world");
            if($conector -> connect_errno){
                echo "Fallo al conectar a MySQL: " . $conector->connect_error;
            }else{
                $asia = $conector->query("SELECT * FROM country WHERE Continent='Asia'");
                
                $europe = $conector->query("SELECT * FROM country WHERE Continent='Europe'");
                
                $northAmerica = $conector->query("SELECT * FROM country WHERE Continent='North America'");
                
                $africa = $conector->query("SELECT * FROM country WHERE Continent='Africa'");
                
                $oceania = $conector->query("SELECT * FROM country WHERE Continent='Oceania'");
                
                $antarctica = $conector->query("SELECT * FROM country WHERE Continent='Antarctica'");
                
                $southAmerica = $conector->query("SELECT * FROM country WHERE Continent='South America'");
            
        ?>
        
        <div id="tabla1">
           
           <h2>Asia</h2>
           
            <table class="tabla1">

                <thead>
                    <tr><td>Num</td> <td>Nombre</td> <td>Continente</td> <td>Superficie</td></tr>
                </thead>

                <tbody>

        <?php
               $cont = 1;
                foreach($asia as $fila){
                    
                        if (($cont % 2) == 0){  
                            echo "<tr class='lineas'>". "<td>". $cont. "</td>". "<td>". $fila['Name']. "</td>". "<td>". $fila['Continent']. "</td>". "<td>". $fila['SurfaceArea']. "</td>". "</tr>";
                        }else{
                            echo "<tr>". "<td>". $cont. "</td>". "<td>". $fila['Name']. "</td>". "<td>". $fila['Continent']. "</td>". "<td>". $fila['SurfaceArea']. "</td>". "</tr>";
                        }
                      
                    
                    $cont++;
                }
            }
        ?>
                </tbody>
            </table> <!-- fin de la tabla 1 para estructurar la consulta de php -->
        </div>
        
        <div id="tabla2">
           <h2>Europa</h2>
           
            <table>

                <thead class="tabla2">
                    <tr><td>Num</td> <td>Nombre</td> <td>Continente</td> <td>Superficie</td></tr>
                </thead>

                <tbody>


        <?php
               $cont = 1;
                foreach($europe as $fila){
                    
                        if (($cont % 2) == 0){  
                            echo "<tr class='lineas'>". "<td>". $cont. "</td>". "<td>". $fila['Name']. "</td>". "<td>". $fila['Continent']. "</td>". "<td>". $fila['SurfaceArea']. "</td>". "</tr>";
                        }else{
                            echo "<tr>". "<td>". $cont. "</td>". "<td>". $fila['Name']. "</td>". "<td>". $fila['Continent']. "</td>". "<td>". $fila['SurfaceArea']. "</td>". "</tr>";
                        }
                    
                    $cont++;
                }
            
        ?>
                </tbody>
            </table> <!-- fin de la tabla 2 para estructurar la consulta de php -->
        </div>
        
        <div id="tabla1">
           <h2>Norte América</h2>
           

            <table class="tabla1">

                <thead>
                    <tr><td>Num</td> <td>Nombre</td> <td>Continente</td> <td>Superficie</td></tr>
                </thead>

                <tbody>

        <?php
               $cont = 1;
                foreach($northAmerica as $fila){
                    
                        if (($cont % 2) == 0){  
                            echo "<tr class='lineas'>". "<td>". $cont. "</td>". "<td>". $fila['Name']. "</td>". "<td>". $fila['Continent']. "</td>". "<td>". $fila['SurfaceArea']. "</td>". "</tr>";
                        }else{
                            echo "<tr>". "<td>". $cont. "</td>". "<td>". $fila['Name']. "</td>". "<td>". $fila['Continent']. "</td>". "<td>". $fila['SurfaceArea']. "</td>". "</tr>";
                        }
                        
                    
                    $cont++;
                }
        ?>
                </tbody>
            </table> <!-- fin de la tabla 1 para estructurar la consulta de php -->

        </div>
        
        <div id="tabla2">
           <h2>Africa</h2>
           
            <table class="tabla2">

                <thead>
                    <tr><td>Num</td> <td>Nombre</td> <td>Continente</td> <td>Superficie</td></tr>
                </thead>

                <tbody>

        <?php
               $cont = 1;
                foreach($africa as $fila){
                    
                        if (($cont % 2) == 0){  
                            echo "<tr class='lineas'>". "<td>". $cont. "</td>". "<td>". $fila['Name']. "</td>". "<td>". $fila['Continent']. "</td>". "<td>". $fila['SurfaceArea']. "</td>". "</tr>";
                        }else{
                            echo "<tr>". "<td>". $cont. "</td>". "<td>". $fila['Name']. "</td>". "<td>". $fila['Continent']. "</td>". "<td>". $fila['SurfaceArea']. "</td>". "</tr>";
                        }
                        
                    
                    $cont++;
                }
            
        ?>
                </tbody>
            </table> <!-- fin de la tabla 1 para estructurar la consulta de php -->
            
        </div>
        
        <div id="tabla1">
           <h2>Oceania</h2>
           
            <table class="tabla1">

                <thead>
                    <tr><td>Num</td> <td>Nombre</td> <td>Continente</td> <td>Superficie</td></tr>
                </thead>

                <tbody>

        <?php
               $cont = 1;
                foreach($oceania as $fila){
                    
                        if (($cont % 2) == 0){  
                            echo "<tr class='lineas'>". "<td>". $cont. "</td>". "<td>". $fila['Name']. "</td>". "<td>". $fila['Continent']. "</td>". "<td>". $fila['SurfaceArea']. "</td>". "</tr>";
                        }else{
                            echo "<tr>". "<td>". $cont. "</td>". "<td>". $fila['Name']. "</td>". "<td>". $fila['Continent']. "</td>". "<td>". $fila['SurfaceArea']. "</td>". "</tr>";
                        }
                        
                    
                    $cont++;
                }
            
        ?>
                </tbody>
            </table> <!-- fin de la tabla 1 para estructurar la consulta de php -->
        </div>
        
        <div id="tabla2">
           <h2>Antartida</h2>
           
            <table class="tabla2">

                <thead>
                    <tr><td>Num</td> <td>Nombre</td> <td>Continente</td> <td>Superficie</td></tr>
                </thead>

                <tbody>

        <?php
               $cont = 1;
                foreach($antarctica as $fila){
                    
                        if (($cont % 2) == 0){  
                            echo "<tr class='lineas'>". "<td>". $cont. "</td>". "<td>". $fila['Name']. "</td>". "<td>". $fila['Continent']. "</td>". "<td>". $fila['SurfaceArea']. "</td>". "</tr>";
                        }else{
                            echo "<tr>". "<td>". $cont. "</td>". "<td>". $fila['Name']. "</td>". "<td>". $fila['Continent']. "</td>". "<td>". $fila['SurfaceArea']. "</td>". "</tr>";
                        }
                        
                    
                    $cont++;
                }
            
        ?>
                </tbody>
            </table> <!-- fin de la tabla 1 para estructurar la consulta de php -->
        </div>
        
        <div id="tabla1">
           <h2>Sud América</h2>
           
            <table class="tabla1">

                <thead>
                    <tr><td>Num</td> <td>Nombre</td> <td>Continente</td> <td>Superficie</td></tr>
                </thead>

                <tbody>

        <?php
               $cont = 1;
                foreach($southAmerica as $fila){
                    
                        if (($cont % 2) == 0){  
                            echo "<tr class='lineas'>". "<td>". $cont. "</td>". "<td>". $fila['Name']. "</td>". "<td>". $fila['Continent']. "</td>". "<td>". $fila['SurfaceArea']. "</td>". "</tr>";
                        }else{
                            echo "<tr>". "<td>". $cont. "</td>". "<td>". $fila['Name']. "</td>". "<td>". $fila['Continent']. "</td>". "<td>". $fila['SurfaceArea']. "</td>". "</tr>";
                        }
                        
                    
                    $cont++;
                }
            
        ?>
                </tbody>
            </table> <!-- fin de la tabla 1 para estructurar la consulta de php -->
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