<?php
namespace Acredito\Model;
use Acredito\Database\database as BD;
use \Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Capsule\Manager as DB;

class OrdenRecurrente extends Model{
    /**
     * Nombre de la tabla correspondiente al modelo
     */
    protected $table = "ordenes_recuerrentes";

    /**
     * Campos visibles
     */
    protected $fields = ["id", "order_id", "referencia", "barcode", "barcode_url", "parent_id", "created_at", "expires_at", "type", "custom_reference"];

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
        $orden = self;
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

    public function CreateCustomer(){
      $curl = curl_init();

      curl_setopt_array($curl, [
        CURLOPT_URL => "https://api.conekta.io/customers",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{\"default_shipping_contact_id\":\"ship_cont_1a2b3c4d5e6f7g8h (Conekta_ID)\",\"corporate\":false,\"default_payment_source_id\":\"src_1a2b3c4d5e6f7g8h\",\"payment_sources\":[{\"type\":\"cash_recurrent\",\"token_id\":\"tok_a1b2c3d4e5f6g7h8\"}],\"phone\":\"6682229752\",\"name\":\"Carlos Francisco Aguilar Navarrete\",\"email\":\"carlosf.aguilarn@gmail.com\",\"plan_id\":\"1\"}",
        CURLOPT_HTTPHEADER => [
          "Accept: application/vnd.conekta-v2.0.0+json",
          "Authorization: key_veJpw7v4U3MSRALS92ziASO",
          "Content-Type: application/json"
        ],
      ]);

      $response = curl_exec($curl);
      $err = curl_error($curl);

      curl_close($curl);

      if ($err) {
        return "cURL Error #:" . $err;
      } else {
        return $response;
      }
    }
}
