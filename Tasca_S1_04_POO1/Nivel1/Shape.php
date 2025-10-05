<?php
class Shape{
    public $alto;
    public $ancho;

    function __construct($alto,$ancho){
        $this->alto = "$alto";
        $this->ancho = "$ancho";
    }
    public function area(){
        return 0;
    }
    
}
    
    
    
    
?>