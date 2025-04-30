<?php
namespace Roan\Model;
use Roan\Database\database as BD;
use \Illuminate\Database\Eloquent\Model as Model;

class Cliente extends Model{
    
    /**
     * Nombre de la tabla correspondiente al modelo
     */
    protected $table = "clientes";
 
    /**
     * Campos visibles
     */
    protected $fields = ["id", "nombre", "apellido", "direccion", "telefono", "estatus"];

    /**
     * Timestamps
     */
    public $timestamps = false;

    /**
     * Otros campos
     */
    protected $others = [""];

    public function GetCliente($id){ 
        $bd = new BD;
        $sql = "
            SELECT * FROM clientes WHERE ID=$id
        ";
        return $bd->select($sql, false);
    }

    public function RegistrarCliente($DATA){ 
        $bd = new BD;
        $sql = "
            INSERT INTO `clientes`(
                `NOMBRE`, `APELLIDO`
            ) VALUES ( 
                '".$DATA['nombre']."', 
                '".$DATA['apellido']."'                     
            )
        "; 
        return $bd->insert($sql);
    }
}