<?php
//include
//include_once
//require
//require_once
include '../partials/header.php';
    class Empleado {
       //* constructor property promotion
        public function __construct(
        
            private string $nombre,
            protected  string $apellido,
            private  string $departamento,
            protected string $email,
            private int $codigo
            
        ){}

        //* GET: para obtener un valor 
        //* Set para modificar un valor 
        public function getNombre()
        {
           return $this->nombre;
        }

        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }

        public function getApellido()
        {
           return $this->apellido;
        }

        public function setApellido($apellido)
        {
            $this->apellido = $apellido;
        }

        public function getDepartamento()
        {
           return $this->departamento;
        }

        public function setDepartamento($departamento)
        {
            $this->departamento = $departamento;
        }

        public function getEmail()
        {
           return $this->email;
        }

        public function setEmail($email)
        {
            $this->email = $email;
        }

        public function getCodigo()
        {
           return $this->codigo;
        }

        public function setCodigo($codigo)
        {
            $this->codigo = $codigo;
        }

        public function consultarNombreEmpleado()
        {
            echo $this->nombre ." ". $this->apellido;
        }
        public function consultarDepartamento()
        {
            return $this-> departamento;
        }


    }

    $alexis = new Empleado("ALEXIS", "CHAVEZ", "DESARROLLO", "AJSDHLA", 20);
    $jose = new Empleado ("ALEXIDASDS", "CHAVEZDASD", "DESARROLLOLALSKDJ", "ASDASDAJSDHLA", 110);

   


    echo "<pre>";
        //$alexis->consultarNombreEmpleado();
        //var_dump($alexis);
        echo $alexis->getNombre();
        $alexis->setNombre('alberto');
        echo"<br>";
        echo $alexis->getNombre();
        echo"<br>";
        echo $alexis->getApellido();
        $alexis->setApellido('sanchez');
        echo"<br>";
        echo $alexis->getApellido();
        echo"<br>";
        echo $alexis->getDepartamento();
        $alexis->setDepartamento('limpieza');
        echo"<br>";
        echo $alexis->getDepartamento();
        echo"<br>";
        echo $alexis->getEmail();
        $alexis->setEmail('123@345');
        echo"<br>";
        echo $alexis->getEmail();
        echo"<br>";
        echo $alexis->getCodigo();
        $alexis->setCodigo(150325);
        echo"<br>";
        echo $alexis->getCodigo();
        
        //$departamento = $alexis->consultarDepartamento();
        //echo $departamento;

    //echo "</pre>";
    //echo "<pre>";
     //   var_dump($jose);
    //echo "</pre>";


?>