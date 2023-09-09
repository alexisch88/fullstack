<?php 
//include 
//include_once
//require
//require_once

include '../partials/header.php';

    abstract class Persona {
        protected static $nombre;
        protected $apellido;
        protected $email;

        public function __construct(string $nombre, string $apellido, string $email)
        {
             self::$nombre = $nombre;
             $this->apellido = $apellido;
             $this->email = $email;
        }

        public function mostrarInformacion()
        {
            echo "Nombre y apellido: $this->nombre $this->apellido, Email: $this->email";
        }

    }

    class Empleado extends Persona {
        protected $departamento;
        protected $codigo;

        //* Metodo Magico Inicializador
        public function __construct(string $nombre, string $apellido, string $departamento, string $email,int  $codigo)
        {
            parent::__construct($nombre, $apellido, $email);
             $this->departamento = $departamento;
             $this->codigo = $codigo;
        }
        public static function getNombre()
        {
            return parent::$nombre;
        }
    }

    class Proveedor extends Persona {
        protected $empresa;

        //* Metodo Magico Inicializador
        public function __construct(string $nombre, string $apellido, string $email, string $empresa)
        {
            parent::__construct($nombre, $apellido, $email);
             $this->empresa = $empresa;
        }
    }

    // $persona = new Persona('Alexis','Chavez','alexis@google.com');
    $empleado = new Empleado('Ronaldo', 'Rodriguez', 'Desarrollo', 'ron@google.com', 100);
    $proveedor = new Proveedor('Jose', 'Oroño', 'jose@google.com', 'URBE');

    echo $empleado::getNombre();
    // echo "<pre>";
    //     var_dump($persona);
    // echo "</pre><br>";
    echo "<pre>";
        var_dump($empleado);
    echo "</pre><br>";

    echo "<pre>";
        var_dump($proveedor);
    echo "</pre><br>";

    $empleado->mostrarInformacion();
    echo "<br>";
    $proveedor->mostrarInformacion();
    
?>