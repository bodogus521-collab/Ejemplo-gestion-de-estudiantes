<?php

// 1. Creacion de la clase y definicion de atributos
class Alumno {
    // Atributos (pueden ser "public" o "private")
    public $nombre;
    public $matricula;
    public $carrera;
    private $promedio; // Atributo privado para proteger el dato

    // 2. Implementacion del constructor
    // Se ejecuta automaticamente al instanciar la clase
    public function __construct($nombre, $matricula, $carrera, $promedio) {
        $this->nombre = $nombre;
        $this->matricula = $matricula;
        $this->carrera = $carrera;
        $this->promedio = $promedio;
    }

    // 3. Uso de metodos (acciones que puede realizar el objeto)
    public function mostrarDatos() {
        return "<strong>Alumno:</strong> {$this->nombre} <br>" .
               "<strong>Matricula:</strong> {$this->matricula} <br>" .
               "<strong>Carrera:</strong> {$this->carrera} <br>" .
               "<strong>Promedio:</strong> {$this->promedio} <br>";
    }

    // Metodo para evaluar si el alumno esta aprobado
    public function evaluarEstado() {
        if ($this->promedio >= 70) {
            return "<span style='color: green;'>Estado: Aprobado </span>";
        } else {
            return "<span style='color: red;'>Estado: Reprobado </span>";
        }
    }
}

// ---------------------------------------------------------
// 4. Instanciacion de objetos a partir de la clase
// ---------------------------------------------------------

echo "<h2>Sistema de Gestion Escolar - Registro de Alumnos</h2>";
echo "<hr>";

// Primer objeto pasando argumentos al constructor
$alumno1 = new Alumno("Sofia Perez", "A0000001", "Ingenieria en Sistemas", 88.5);

// Segundo objeto
$alumno2 = new Alumno("Carlos Gomez", "A0000002", "Administracion de Empresas", 65.0);

// Tercer objeto
$alumno3 = new Alumno("Ana Sanchez", "A0000003", "IT", 95.0);

// Cuarto objeto
$alumno4 = new Alumno("Roberto Cantu", "A0000004", "Mecatronica", 59.0);

// Quinto objeto
$alumno5 = new Alumno("Sara Garza", "A0000005", "Hoteleria y turismo", 87.2);

// Sexto objeto
$alumno6 = new Alumno("Katia Martinez", "A0000006", "Mecatronica", 97.5);

// ---------------------------------------------------------
// 5. Uso de los métodos de los objetos
// ---------------------------------------------------------

echo "<h3>Información del Primer Alumno:</h3>";
echo $alumno1->mostrarDatos();
echo $alumno1->evaluarEstado();
echo "<br><br>";

echo "<h3>Informacion del Segundo Alumno:</h3>";
echo $alumno2->mostrarDatos();
echo $alumno2->evaluarEstado();

echo "<h3>Informacion del Tercer Alumno:</h3>";
echo $alumno3->mostrarDatos();
echo $alumno3->evaluarEstado();

echo "<h3>Informacion del Cuarto Alumno:</h3>";
echo $alumno4->mostrarDatos();
echo $alumno4->evaluarEstado();

echo "<h3>Informacion del Quinto Alumno:</h3>";
echo $alumno5->mostrarDatos();
echo $alumno5->evaluarEstado();

echo "<h3>Informacion del Sexto Alumno:</h3>";
echo $alumno6->mostrarDatos();
echo $alumno6->evaluarEstado();