<?php
/**
 * CLASE QUE CONTIENE LOS M�0�7TODOS PARA ESTABLECER CONEXI�0�7N CON BASE DE DATOS
 */

class BD{
    protected $host;
    protected $user;
    protected $password;
    protected $database;
  
    function conectar(){ 
        $this->host = "127.0.0.1";
        $this->user = "root";
        $this->password = "";
        $this->database = "acredito_acredito"; 
        
        /*
        $this->host = "rossaguisan.com";
        $this->user = "rossagui_rossaguisan";
        $this->password = "(rossaguisan410)";
        $this->database = "rossagui_rossaguisan";
        */

        $conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);

        if( $conn ) {
            return $conn;
        }else{
            echo "Conexi��n no se pudo establecer.<br />";
            die( print_r( mysqli_error($conn), true));
        }
    }  
}