<?php
namespace Acredito\Model;
use Acredito\Database\database as BD;
use \Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Capsule\Manager as DB; 

class Abono extends Model{
    /**
     * Nombre de la tabla correspondiente al modelo
     */
    protected $table = "abonos";

    /**
     * Campos visibles
     */
    protected $fields = ["id", "fecha", "prestamo_id", "abono", "saldo"];

    public $timestamps = false;

    /**
     * Obtiene los abonos de un préstamo
     */
    public function GetAbonosPrestamo($prestamo_id){
        $fields =  array_replace($this->fields, [0 => "abonos.id", 1 => "abonos.fecha"]);
        $fields = array_merge($fields, ['prestamos.id', 'prestamos.importe']);
        $fields = array_merge($fields, ['clientes.id', 'clientes.nombre', 'clientes.apellido']);

        $abonos = self::select($fields)
            ->join('prestamos', 'prestamos.ID', '=', 'abonos.PRESTAMO_ID') 
            ->join('clientes', 'clientes.ID', '=', 'prestamos.CLIENTE_ID') 
            ->where('prestamos.id', $prestamo_id)
            ->orderBy('abonos.fecha', 'asc')
            ->get();

        return $abonos;
    }

    /**
     * Crea un nuevo registro del modelo
     */
    public function RegistrarAbono($data){
        $abono = new Abono;
        $abono->prestamo_id = $data['prestamo_id'];
        $abono->abono = $data['abono'];
        $abono->fecha = date("Y-m-d");
        
        return $abono->save();
    }
}