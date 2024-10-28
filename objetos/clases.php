<?php
    class Persona{
        private $dni;
        private $nombre;
        private $email;

        public function __construct($d, $n, $e){
            $this -> dni = $d;
            $this -> nombre = $n;
            $this -> email = $e;
        }

        public function getNombre() : string{
            return $this -> nombre;
        }

        public function getEmail() : string{
            return $this -> email;
        }
        
        public function getDni() : string{
            return $this -> dni;
        }
        
        public function setDni($dni){
            $this -> dni = $dni;
        }

        public function setNombre($nombre){
            $this -> nombre = $nombre;
        }

        public function setEmail($email){
            $this -> email = $email;
        }

        public function mostrar(){
            print "DNI: " . $this -> dni . "-" . "Nombre: " . $this -> nombre . "-" . "Email: " . $this -> email;
        }
    }
    // $persona1 = new Persona("03156166Z", "jaume", "jaugarfra@alu.edu.gva.es");
    // echo $persona1 -> mostrar();
   
    class Estudiante extends Persona{
        private $numExpediente;

        public function __construct($d, $n, $e, $ne){
            parent::__construct($d, $n, $e);
            $this -> numExpediente = $ne;
        }

        public function getNumExpediente() : int{
            return $this -> numExpediente;
        }

        public function setNumExpediente($ne){
            $this -> numExpediente = $ne;
        }
        
        public function mostrar(){
            
            print parent::mostrar() . "Número de expediente: " . $this -> numExpediente;
        }
    }
   
   $persona2 = new Estudiante("03156166Z", "jaume", "jaugarfra@alu.edu.gva.es", 3);
   echo $persona2 -> mostrar();
?>