<?php
namespace Acredito\Model;
use Acredito\Database\database as BD;

class Model{ 
    public $new;

    function __construct() {
        $this->new = new \stdClass();
        return $this->new;
    }
    
    public function findAll(){
        $fields = implode("," , $this->fields);
        $others = implode("," , $this->others);
        $bd = new BD;
        return $bd->select("SELECT $fields $others FROM $this->table");
    }

    public function save(){ 
        $bd = new BD;   
        return $bd->insert($this->GetStringSQL(get_object_vars($this->new)));
    }

    function GetStringSQL($arr){
        $keys = array();
        $val = array();

        while ($nombre = current($arr)) {
            array_push($keys, key($arr));
            array_push($val, $nombre);
            next($arr);
        }

        $keys = implode("," , $keys);
        $val = "'".implode("','" , $val)."'";
       return "INSERT INTO $this->table ($keys) VALUES ($val)";
    }
}