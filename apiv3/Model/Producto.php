<?php
namespace Acredito\Model;
use Acredito\Database\database as BD;
use \Illuminate\Database\Eloquent\Model as Model;

class Producto extends Model{
    
    /**
     * Nombre de la tabla correspondiente al modelo
     */
    protected $table = "productos";
 
    /**
     * Campos visibles
     */
    protected $fields = ["id", "descripcion", "costo", "precio", "tipo", "activo"];

    /**
     * Timestamps
     */
    public $timestamps = false;

    /**
     * Otros campos
     */
    protected $others = [""];
 
}