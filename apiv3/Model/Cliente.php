<?php
namespace Acredito\Model;
use Acredito\Database\database as BD;
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

    /**
     * Obtiene un préstamo
     */
    public function GetCliente($id){
        $cliente = self::find($id);
        return $cliente;   
    }

    public function RegistrarCliente($data){ 
        $cliente = new Cliente;
        $cliente->nombre = $data['nombre'];
        $cliente->apellido = $data['apellido'];
        $cliente->direccion = $data['direccion'];
        $cliente->telefono = $data['telefono'];
        
        return $cliente->save();
    }

    public function GetCliente2($id){ 
        $bd = new BD;
        $sql = "
            SELECT * FROM clientes WHERE ID=$id
        ";
        return $bd->select($sql, false);
    }
    public function RegistrarCliente2($DATA){ 
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