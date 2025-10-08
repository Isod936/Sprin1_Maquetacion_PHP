<?php
class Persona {
    private $datos = [
        "nombre" => "Ivan",
        "edad" => 49
    ];

    public function __toString() {
        return "Soy una persona llamada " . $this->datos["nombre"];
    }

    public function __get($propiedad) {
        if(array_key_exists($propiedad, $this->datos)) {
            return $this->datos[$propiedad];
        }
        return "Propiedad '$propiedad' no encontrada";
    }
}

$yo = new Persona();

echo $yo . PHP_EOL;
echo $yo->edad . PHP_EOL;
echo $yo->apellido . PHP_EOL;
?>