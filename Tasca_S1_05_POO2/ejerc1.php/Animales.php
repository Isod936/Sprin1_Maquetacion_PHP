<?php
class Animales{
    public $nombre;
    
    public function __construct($nombre) {
        $this->nombre = $nombre;
    }
    public function habla(){
        return "Este animal hace ";
    }
        
}




?>