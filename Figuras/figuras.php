<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>Figura 1</title>
        <STYLE TYPE="text/css">
            <!--
            .divs{
                float: left;
                width: 20%;
            }
            
            h1{
                text-align: center;
                margin: 30px 0;
            }
            -->
        </STYLE>

    </head>

    <body>
        <h1>Actividad 6, figuritas</h1>
        
        <!-- 1-¿Sois capaces de pintar con un while en HTML+PHP 5 estrellas como la figura? -->
        <div class="w3-container divs">
            <div class="w3-card-4">
                <header class="w3-container w3-blue">
                    <h3>Figurita 1</h3>
                </header>

                <div class="w3-container">
                    <p>    
                        <?php

                            $simb = "*";
                            $cont = 0;

                            while($cont < 5){
                                echo $simb . "<br>";
                                $cont ++;
                            }
                        ?>
                    </p>
                    <br><br>
                </div>
                
                <footer class="w3-container w3-blue"><h3></h3></footer>
            </div>
        </div><!-- fin Figurita 1 -->

        <!-- 2-¿Sois capaces de pintar con dos for en HTML+PHP un cuadrado como la figura? -->
        <div class="w3-container divs">
            <div class="w3-card-4">
                <header class="w3-container w3-blue">
                    <h3>Figurita 2</h3>
                </header>

                <div class="w3-container">
                    <p>    
                        <?php
                        
                            $simb = "";
                        
                            for($cont = 0;$cont < 5;$cont ++){
                                for($i = 0;$i < 5;$i ++){
                                    $simb = $simb . "*";
                                }

                                echo $simb . "<br>";
                                $simb = "";
                            }
                        ?>
                    </p>
                    <br><br>
                </div>
                
                <footer class="w3-container w3-blue"><h3></h3></footer>
            </div>
        </div><!-- fin Figurita 2 -->
    
        <!-- 3-¿Sois capaces de pintar con dos for en HTML+PHP una escalera como la figura? -->
        <div class="w3-container divs">
            <div class="w3-card-4">
                <header class="w3-container w3-blue">
                    <h3>Figurita 3</h3>
                </header>

                <div class="w3-container">
                    <p>
                        <?php
                            $simb = "";

                            for($cont = 0;$cont < 7;$cont ++){
                                for($i = 0;$i <= $cont;$i ++){
                                    $simb = $simb . "*";
                                }

                                echo $simb . "<br>";
                                $simb = "";
                            }
                        ?>
                    </p>
                </div>
                
                <footer class="w3-container w3-blue"><h3></h3></footer>
            </div>
        </div><!-- fin Figurita 3 -->
        
        <!-- 4-¿Sois capaces de pintar  en HTML+PHP la figura? -->
        <div class="w3-container divs">
            <div class="w3-card-4">
                <header class="w3-container w3-blue">
                    <h3>Figurita 4</h3>
                </header>

                <div class="w3-container">
                    <p>
                        <?php

                            $simb = "*";
                            $cont = 5;
                            $flag = false;

                            while($flag == false){
                                if($cont >= 3){
                                    echo $simb . "<br>";
                                    $simb = $simb . "**";
                                }else{
                                    $simb = "";
                                    if($cont == 2){
                                        $cont = 3;
                                    }else{
                                        $flag = true;
                                    }

                                    for($i = 0;$i < $cont;$i++){
                                        $simb = $simb . "*";
                                    }

                                    echo $simb . "<br>";
                                    $cont--;
                                }

                                $cont --;
                            }
                        ?>
                    </p>
                    <br><br>
                </div>
                
                <footer class="w3-container w3-blue"><h3></h3></footer>
            </div>
        </div><!-- fin Figurita 4 -->
        
        <!-- 5-¿Sois capaces de pintar en HTML+PHP la figura? -->
        <div class="w3-container divs">
            <div class="w3-card-4">
                <header class="w3-container w3-blue">
                    <h3>Figurita 5</h3>
                </header>

                <div class="w3-container">
                    <p align="center">
                        <?php
                            $simb = "";

                            for($cont = 0;$cont < 5;$cont ++){
                                
                                if($cont == 0){
                                    $simb = $simb . "*";
                                }else{
                                    $simb = $simb . "**";
                                }  

                                echo $simb . "<br>";
                            }
                        ?>
                    </p>
                    <br><br>
                </div>
                
                <footer class="w3-container w3-blue"><h3></h3></footer>
            </div>
        </div><!-- fin Figurita 5 -->
 
    </body>
</html>


















