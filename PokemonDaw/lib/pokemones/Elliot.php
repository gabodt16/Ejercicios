<?php

    require_once "lib/Pokemon/Pokemon.php";


    class Elliot extends Pokemon{

        private $habilidad="Cachetada verbal";
        private $descripcion="Ataque multiple y a gran velocidad que aturde y desconcierta a los demás PokemonDaw";
        private $puntos=40;
        private $img="img/Elliot.png";

        function __construct(){
            parent::setNombre("Slaliot");
            parent::setVida(150);
            parent::elemYdebil(7);
            
            $this->habilidad="Cachetada verbal";
            $this->descripcion="Dice guevonadas con sentido <br> sobre el adversario que se <br> van acumulando hasta que explota <br> en un Turn Down For What";
            $this->puntos=45;
            $this->img="img/Elliot.png";
        }

        //Getters y setters

        public function setHabilidad($nom){
            $this->habilidad=$nom;
        }

        public function getHabilidad(){
            return $this->habilidad;
        }

        public function getDescrip(){
            return $this->descripcion;
        }

        public function getPuntos(){
            return $this->puntos;
        }
        
        public function getImg(){
            return $this->img;
        }
    
    }

?>