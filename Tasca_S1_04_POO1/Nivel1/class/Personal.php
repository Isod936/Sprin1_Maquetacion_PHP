<?php
class Personal {
    public $nombre;
    public $sueldo;

    function __construct($nombre, $sueldo)
    {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function getPreparar(){
        if ($this->sueldo > 6000) {
            echo $this->nombre . " debe pagar impuestos".PHP_EOL;
        } else {
            echo $this->nombre . " no debe pagar impuestos" .PHP_EOL;
        }
    }
}

?>