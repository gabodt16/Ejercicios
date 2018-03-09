<?php

    class Pokemon{
        private $nombre="";
        private $vida=0;
        private $element="";
        private $debilidad="";
        private $fase="";
        
        function __construct(){
            $this->nombre="";
            $this->vida=0;
            $this->element="";
            $this->debilidad="";
            $this->fase="";
        }
        
       
        //Getters y setters

        public function setNombre($nom){
            $this->nombre=$nom;
        }
        
        public function getNombre(){
            return $this->nombre;
        }
        
        public function setVida($vida){
            $this->vida=$vida;
        }
        
        public function getVida(){
            return $this->vida;
        }
        
        public function getElement(){
            return $this->element;
        }
        
        public function getDebilidad(){
            return $this->debilidad;
        }
        
        public function setFase($valor){
            $this->fase=$valor;
        }
        
        public function getFase(){
            return $this->fase;
        }
        
        
        // Funciones para crear las cartas
        
        public function elemYdebil($num){
            
            if($num == 1){
                $this->element="Fuego";
                $this->debilidad="Agua y Piedra";
                return $this->element;
            }elseif($num == 2){
                $this->element="Agua";
                $this->debilidad="Matitas";
                return $this->element;
            }elseif($num == 3){
                $this->element="Piedra";
                $this->debilidad="Eléctrico";
                return $this->element;
            }elseif($num == 4){
                $this->element="Eléctrico";
                $this->debilidad="Matitas";
                return $this->element;
            }elseif($num == 5){
                $this->element="Psíquico";
                $this->debilidad="Fuego y Piedra";
                return $this->element;
            }elseif($num == 6){
                $this->element="Matitas";
                $this->debilidad="Psíquico";
                return $this->element;
            }else{
                return "Error, solo existen los valores del 1 al 6";
            }
            
        }
        
    }


?>