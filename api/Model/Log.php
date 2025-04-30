<?php
namespace Roan\Model;
use \Illuminate\Database\Eloquent\Model as Model;

class Log extends Model{
    
    /**
     * Nombre de la tabla correspondiente al modelo
     */
    protected $table = "logs";

    /**
     * Campos visibles
     */
    protected $fields = ["id", "usuario_id", "descripcion", "fecha"];

    /**
     * Otros campos
     */
    protected $others = [", date_format(fecha, '%d/%m/%Y') as 'fecha'"];

    /**
     * Timestamps
     */
    public $timestamps = false;
}