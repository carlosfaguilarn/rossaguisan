<?php
namespace Acredito\Model;
use Acredito\Database\database as BD;
use \Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Capsule\Manager as DB; 

class Socio extends Model{
    
    /**
     * Nombre de la tabla correspondiente al modelo
     */
    protected $table = "socios";

    /**
     * Campos visibles
     */
    protected $fields = ["id", "nombre", "apellido", "estatus"];

    /**
     * Otros campos
     */
    protected $others = [""];

    public function GetSocios($id){ 
        $socio = self::find($id);
        return $socio;
        /*$sql = "
            SELECT * FROM socios WHERE ID=$id
        ";*/
    }

    public function RegistrarSocio($DATA){ 
        $socio = new self;
        $socio->NOMBRE = $DATA['nombre'];
        $socio->APELLIDO = $DATA['apellido'];
        return $socio->save();

        /*$sql = "
            INSERT INTO `socios`(
                `NOMBRE`, `APELLIDO`
            ) VALUES ( 
                '".$DATA['nombre']."', 
                '".$DATA['apellido']."'                     
            )
        ";*/ 
    }
}