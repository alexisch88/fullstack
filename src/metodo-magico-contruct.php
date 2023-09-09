<?php
//include
//include_once
//require
//require_once
include '../partials/header.php';
    class Empleado {
        public $nombre;
        public $apellido;
        public $departamento;
        public $email;
        public $codigo;
        
        //* metodo magico inicializado
        public function __construct(string $nombre, string $apellido, string $departamento, string $email, int $codigo)
        {
            $this -> nombre = $nombre;
            $this -> apellido = $apellido;
            $this -> departamento = $departamento;
            $this -> email = $email;
            $this -> codigo = $codigo;
            

        }



    }

    $empleado1 = new Empleado("ALEXIS", "CHAVEZ", "DESARROLLO", "AJSDHLA", 20);
    $empleado2 = new Empleado ("ALEXIDASDS", "CHAVEZDASD", "DESARROLLOLALSKDJ", "ASDASDAJSDHLA", 110);

   


    echo "<pre>";
        var_dump($empleado1);
    echo "</pre>";
    echo "<pre>";
        var_dump($empleado2);
    echo "</pre>";


?>