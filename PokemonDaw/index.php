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
            require_once "lib/Pokemones/Sebas.php";
        
            $gabo=new Gabo();
            $sebas=new Sebas();
            
        ?>
        
        <div id="tabla1">
        <table>
            <tbody>
                <tr class='lineas'><td>Nombre</td> <td><?=$gabo->getNombre()?></td></tr>
                <tr><td>Vida</td> <td><?=$gabo->getVida()?></td></tr>
                <tr class='lineas'><td>Elemento</td> <td><?=$gabo->getElement()?></td></tr>
                <tr><td>Debilidad</td> <td><?=$gabo->getDebilidad()?></td></tr>
                <tr class='lineas'><td>Habilidad</td> <td><span class="habilidad"><?=$gabo->getHabilidad()?></span> <span class="puntos"><?=$gabo->getPuntos()?>pts</span></td></tr>
                <tr><td>Descipción</td> <td><?=$gabo->getDescrip()?></td></tr>
            </tbody>
        </table><!-- fin de la tabla 1 para estructurar la consulta de php -->
        </div>  
        
        <div id="tabla2">
        <table>
            <tbody>
                <tr class='lineas'><td>Nombre</td> <td><?=$sebas->getNombre()?></td></tr>
                <tr><td>Vida</td> <td><?=$sebas->getVida()?></td></tr>
                <tr class='lineas'><td>Elemento</td> <td><?=$sebas->getElement()?></td></tr>
                <tr><td>Debilidad</td> <td><?=$sebas->getDebilidad()?></td></tr>
                <tr class='lineas'><td>Habilidad</td> <td><span class="habilidad"><?=$sebas->getHabilidad()?></span> <span class="puntos"><?=$sebas->getPuntos()?>pts</span></td></tr>
                <tr><td>Descipción</td> <td><?=$sebas->getDescrip()?></td></tr>
            </tbody>
        </table><!-- fin de la tabla 1 para estructurar la consulta de php -->
        </div>  
        
    </body>
</html>