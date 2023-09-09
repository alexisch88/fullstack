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
        

    }

    $empleado1 = new Empleado;
    $empleado2 = new Empleado;

    $empleado1->nombre = "alexis";
    $empleado1->apellido ="chavez";

    $empleado2->nombre = "jose";
    $empleado2->apellido ="ramirez";


    echo "<pre>";
        var_dump($empleado1);
    echo "</pre>";
    echo "<pre>";
        var_dump($empleado2);
    echo "</pre>";


?>