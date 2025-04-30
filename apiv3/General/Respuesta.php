<?php
namespace Acredito\General;

class Respuesta{ 
    public $valida;
    public $mensaje;
    public $data;

    function __construct($valida, $mensaje, $data) {  
        $this->valida = $valida;
        $this->mensaje = $mensaje;      
        $this->data = $data;      
    }

    static function createPositive($data = null){
        return new Respuesta(true, "", $data);
    }

    static function createNegative($mensaje, $data = null){
        return new Respuesta(false, $mensaje, $data);
    }
}