<?php

    require_once "lib/Pokemon/Pokemon.php";


    class Gabo extends Pokemon{

        private $habilidad="Puños ladilla";
        private $descripcion="Ataque multiple y a gran velocidad que aturde y desconcierta a los demás PokemonDaw";
        private $puntos=40;
        private $img="gabo.png";

        function __construct(){
            parent::setNombre("Primeabo");
            parent::setVida(150);
            parent::elemYdebil(3);
            
            $this->habilidad="Puños ladilla";
            $this->descripcion="Ataque multiple y a gran <br> velocidad que aturde y <br> desconcierta a los demás <br> PokemonDaw";
            $this->puntos=40;
            $this->img="gabo.png";
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
    
    }

?>