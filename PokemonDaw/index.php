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
            require_once "lib/Pokemones/Elliot.php";
        
            $gabo=new Gabo();
            $sebas=new Sebas();
            $elliot=new Elliot();
            
        ?>
        
        <div id="tabla1">
        
        <img src="<?=$elliot->getImg()?>" alt="Img pokemon de gabo">
        
        <table>
            <tbody>
                <tr class='lineas'><td>Nombre</td> <td><?=$elliot->getNombre()?></td></tr>
                <tr><td>Vida</td> <td><?=$elliot->getVida()?></td></tr>
                <tr class='lineas'><td>Elemento</td> <td><?=$elliot->getElement()?></td></tr>
                <tr><td>Debilidad</td> <td><?=$elliot->getDebilidad()?></td></tr>
                <tr class='lineas'><td>Habilidad</td> <td><span class="habilidad"><?=$elliot->getHabilidad()?></span> <span class="puntos"><?=$elliot->getPuntos()?>pts</span></td></tr>
                <tr><td>Descipción</td> <td><?=$elliot->getDescrip()?></td></tr>
            </tbody>
        </table><!-- fin de la tabla 1 para estructurar la consulta de php -->
        </div>  
        
        <div id="tabla2">
        
        <img src="<?=$sebas->getImg()?>" alt="Img pokemon de sebas">
        
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