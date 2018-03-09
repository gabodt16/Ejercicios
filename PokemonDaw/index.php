<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/estilos.css">
        <title>Pokemon Daw</title>
    </head>

    <body>
        <?php
        
            require_once "lib/Pokemones/Gabo.php";
        
            $gabo=new Gabo();
            
            echo $gabo->getElement();
            echo $gabo->getDebilidad();
            echo $gabo->getVida();
            echo $gabo->getNombre();
        
        ?>
        
        <div id="tabla1">
        <table>
            <tbody>
                <tr class='lineas'><td>Nombre</td> <td><?=$gabo->getNombre()?></td></tr>
                <tr class='lineas'><td>Vida</td> <td><?=$gabo->getVida()?></td></tr>
                <tr class='lineas'><td>Elemento</td> <td><?=$gabo->getElement()?></td></tr>
                <tr class='lineas'><td>Debilidad</td> <td><?=$gabo->getDebilidad()?></td></tr>
            </tbody>
        </table><!-- fin de la tabla 1 para estructurar la consulta de php -->
        </div>  
        
    </body>
</html>