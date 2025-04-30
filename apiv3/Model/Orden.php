<?php
namespace Acredito\Model;
use Acredito\Database\database as BD;
use \Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Capsule\Manager as DB;

class Orden extends Model{
    /**
     * Nombre de la tabla correspondiente al modelo
     */
    protected $table = "ordenes";

    /**
     * Campos visibles
     */
    protected $fields = ["id", "order_id", "referencia", "cliente_id", "prestamo_id", "cantidad", "created_at", "updated_at", "expires_at", "status", "barcode_url", "paid_at"];

    public $timestamps = false;

    /**
     * Obtiene una orden por id
     */
    public function GetOrden($id){
        return self::find($id);
    }

    /**
     * Obtiene una orden por order_id
     */
    public function GetByOrderId($id){
        $orden = self::select($this->fields)
            ->where('order_id', $id)
            ->first();

        return $orden;
    }

    /**
     * Obtiene una orden por su id
     */
    public function GetOrdenPendienteByCliente($cliente_id) {
        return self::select($this->fields)
          ->where('status', 'pending_payment')
          ->where('cliente_id', $cliente_id)
          ->get();
    }

    /**
     * Crea un nuevo registro del modelo
     */
    public function Create($data){
        $orden = new Orden;
        $orden->order_id = $data['order_id'];
        $orden->referencia = $data['referencia'];
        $orden->cliente_id = $data['cliente_id'];
        $orden->prestamo_id = $data['prestamo_id'];
        $orden->cantidad = $data['cantidad'];
        $orden->created_at = $data['created_at'];
        $orden->updated_at = $data['updated_at'];
        $orden->expires_at = $data['expires_at'];
        $orden->status = $data['status'];
        $orden->barcode_url = $data['barcode_url'];
        $orden->paid_at = $data['paid_at'];
        return $orden->save();
    }

    public function Update($data, $id){
        $orden = self::find($id);
        $orden->order_id = $data['order_id'];
        $orden->referencia = $data['referencia'];
        $orden->cliente_id = $data['cliente_id'];
        $orden->prestamo_id = $data['prestamo_id'];
        $orden->cantidad = $data['cantidad'];
        $orden->created_at = $data['created_at'];
        $orden->updated_at = $data['updated_at'];
        $orden->expires_at = $data['expires_at'];
        $orden->status = $data['status'];
        $orden->barcode_url = $data['barcode_url'];
        $orden->paid_at = $data['paid_at'];
        return $orden->save();
    }
}
