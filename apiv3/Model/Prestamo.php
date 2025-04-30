<?php
namespace Acredito\Model;
use Acredito\Database\database as BD;
use \Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Capsule\Manager as DB;
use Acredito\Model\Abono as Abono;

class Prestamo extends Model{

    /**
     * Nombre de la tabla correspondiente al modelo
     */
    protected $table = "prestamos";

    /**
     * Campos visibles
     */
    protected $fields = ["id", "cliente_id", "prestamo", "importe", "fecha_inicio", "fecha_fin", "meses", "comision", "abonos", "plazos", "finalizo", "socio_id", "fecha", "firmado"];

    public $timestamps = false;

    public function GetPrestamos($SocioID){
        $fields =  array_replace($this->fields, [0 => "prestamos.id"]);
        $fields = array_merge($fields, ['clientes.nombre', 'clientes.apellido']);

        $prestamos = self::select($fields)
            ->join('clientes', 'clientes.ID', '=', 'prestamos.CLIENTE_ID')
            ->where('finalizo', 'N')
            ->where('socio_id', $SocioID)
            ->get();

        foreach ($prestamos as &$prestamo) {
            $prestamo->saldo = $prestamo->importe - Abono::where("prestamo_id", $prestamo->ID)->sum("abono");
        }

        return $prestamos;
    }

    /**
     * Obtiene los abonos de un préstamo
     */
    public function GetAbonosPrestamo($prestamo_id){
        $bd = new BD;
        $sql = "
            SELECT
                abonos.ID AS 'ID', abonos.ABONO, abonos.SALDO,
                prestamos.ID AS 'PRESTAMO_ID', prestamos.IMPORTE,
                DATE_FORMAT(FECHA, '%d/%m/%Y') AS 'FECHA',
                clientes.ID AS 'CLIENTE_ID', clientes.NOMBRE as 'NOMBRE', clientes.APELLIDO as 'APELLIDO'
            FROM `abonos`

            JOIN prestamos ON prestamos.ID = abonos.PRESTAMO_ID
            JOIN clientes ON  clientes.ID = prestamos.CLIENTE_ID

            WHERE
                prestamos.ID = '$prestamo_id' AND
                prestamos.FINALIZO = 'N'

            ORDER BY abonos.`FECHA` ASC
        ";
        return $bd->select($sql);
    }

    /**
     * Obtiene los abonos que debe dar un cliente
     */
    public function GetAbonosCliente($cliente_id){
        $bd = new BD;
        $sql = "
            SELECT prestamos.*,
                clientes.NOMBRE,
                @prestamo := prestamos.ID,
                (
                    SELECT
                    IMPORTE -
                    -- Calcula el total de abonos del préstamo
                    if(sum(abonos.ABONO) IS NULL, 0, sum(abonos.ABONO)) AS 'SALDO'
                    FROM `prestamos`

                    LEFT JOIN abonos on abonos.PRESTAMO_ID = prestamos.ID
                    WHERE prestamos.ID = @prestamo
                ) AS SALDO
            FROM prestamos
            LEFT JOIN clientes ON clientes.ID = prestamos.CLIENTE_ID
            WHERE prestamos.CLIENTE_ID = $cliente_id
        ";
        return $bd->select($sql);
    }

    /**
     * Registra un nuevo abono
     */
    public function RegistrarPrestamo($data){
        // Registrar cliente si no viene el cliente_id
        if(!isset($data['cliente_id'])){
            $cliente = new Cliente;
            $cliente->nombre = $data['nombre'];
            $cliente->apellido = $data['apellido'];
            if($cliente->save()){
                $data['cliente_id'] = $cliente->id;
            }
        }

        $prestamo = new Prestamo;
        $prestamo->cliente_id = $data['cliente_id'];
        $prestamo->prestamo = $data['prestamo'];
        $prestamo->importe = $data['importe'];
        $prestamo->fecha_inicio = $data['fecha_inicio'];
        $prestamo->fecha_fin = $data['fecha_fin'];
        $prestamo->meses = $data['meses'];
        $prestamo->comision = $data['comision'];
        $prestamo->abonos = $data['abonos'];
        $prestamo->plazos = $data['plazos'];
        $prestamo->finalizo = 'N';
        $prestamo->socio_id = $data['socio_id'];

        return $prestamo->save();
    }

    /**
     * Obtiene un préstamo
     */
    public function GetPrestamo($id){
        $fields = array_replace($this->fields, [0 => "prestamos.id"]);
        $fields = array_merge($fields, ['clientes.nombre', 'clientes.apellido']);

        $prestamo = self::select($fields)
            ->join('clientes', 'clientes.id', '=', 'prestamos.cliente_id')
            ->where('prestamos.id', $id)
            ->first();

        if(!isset($prestamo)) return false;

        $prestamo->saldo = $prestamo->importe - Abono::where("prestamo_id", $prestamo->ID)->sum("abono");
        return $prestamo;
    }

    public function FinalizarPrestamo($id){
        $prestamo = self::find($id);
        $prestamo->FINALIZO = 'S';
        return $prestamo->save();
    }

    public function EliminarPrestamo($id){
        $prestamo = self::find($id);
        return $prestamo->delete();
    }

    public function GuardarFotoPrestamo($id, $data){
        $prestamo = self::find($id);
        $prestamo->FIRMA = $data['FIRMA'];
        $prestamo->INE1 = $data['INE1'];
        $prestamo->INE2 = $data['INE2'];
        return $prestamo->save();
    }

    public function UpdateContratoFirmado($id){
        $prestamo = self::find($id);
        $prestamo->FIRMADO = true;
        return $prestamo->save();
    }
}
