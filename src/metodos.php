<?php
//include
//include_once
//require
//require_once
include '../partials/header.php';
    class Empleado {
       //* constructor property promotion
        public function __construct(
        
            public string $nombre,
            public  string $apellido,
            public  string $departamento,
            public  string $email,
            public int $codigo
            
        ){}

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
        $alexis->consultarNombreEmpleado();
        //var_dump($alexis);
        echo"<br>";
        $departamento = $alexis->consultarDepartamento();
        echo $departamento;

    echo "</pre>";
    echo "<pre>";
        var_dump($jose);
    echo "</pre>";


?>