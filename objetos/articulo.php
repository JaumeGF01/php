<?php
    class Articulo {
        private $nombre;
        private $precio;

        public function __construct($nombre, $precio){
            $this->__set_nombre($nombre);
            $this->__set_precio($precio);
        }

        private function __set_nombre($nombre){
            $this->nombre = $nombre;
        }
        
        private function __set_precio($precio){
            $this->precio = $precio;
        }

        public function __get_nombre(){
            return $this->nombre;
        }

        public function __get_precio(){
            return $this->precio;
        }

        public function __toString(){
            return "Nombre del producto: " . $this->__get_nombre() . "<br> Precio: " . $this->__get_precio();
        }
    }
    $articulo = new Articulo("Zapatillas", 15);
    echo $articulo;
?>