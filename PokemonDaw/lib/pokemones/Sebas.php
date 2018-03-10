<?php

    require_once "lib/Pokemon/Pokemon.php";


    class Sebas extends Pokemon{

        private $habilidad="Desvario divagador";
        private $descripcion="Crea confusion entre <br> los pokemones y tiene <br> probabilidad de que el <br> adversario se ataque a si mismo";
        private $puntos=45;
        private $img="img/Sebas.png";

        function __construct(){
            parent::setNombre("Alsebazam");
            parent::setVida(135);
            parent::elemYdebil(5);
            
            $this->habilidad="Desvario divagador";
            $this->descripcion="Crea confusion entre <br> los pokemones y tiene <br> probabilidad de que el <br> adversario se ataque a si mismo";
            $this->puntos=45;
            $this->img="img/Sebas.png";
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