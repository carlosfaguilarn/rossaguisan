<?php
namespace Acredito\Model;
use Acredito\Database\database as BD;

use \Illuminate\Database\Eloquent\Model as Model;
 
class Usuario extends Model{
    
    /**
     * Nombre de la tabla correspondiente al modelo
     */
    protected $table = "usuarios";

    /**
     * Campos visibles
     */
    protected $fields = ["id", "usuario", "nombre", "apellido", "foto"];

    /**
     * Timestamps
     */
    public $timestamps = false;
 
}