<?php

    require_once "lib/Pokemon/Pokemon.php";


    class Gabo extends Pokemon{

        private $habilidad="Puños ladilla";
        private $descripcion="Ataque rápido y multiple que aturde y desconcierta a los demás PokemonDaw";
        private $puntos=40;
        private $img="gabo.png";

        function __construct(){
            parent::setNombre("Primeabo");
            parent::setVida(150);
            parent::elemYdebil(3);
            
            $this->habilidad="Puños ladilla";
            $this->descripcion="Ataque rápido y multiple que aturde y desconcierta a los demás PokemonDaw";
            $this->puntos=0;
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

        public function setPuntos($valor){
            $this->puntos=$valor;
        }

        public function getPuntos(){
            return $this->puntos;
        }
    
    }

?>