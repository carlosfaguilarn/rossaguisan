<?php
namespace Acredito\Database; 

class database{
    // protected $host = "127.0.0.1";
    // protected $user = "acredito_admin";
    // protected $password = "4kR3d1to410";
    // protected $database = "acredito_acredito";
    // protected $conn;
    
    // protected $host = "127.0.0.1";
    // protected $user = "root";
    // protected $password = "";
    // protected $database = "acredito_acredito";
    // protected $conn;

    // Database information
    const settings = array(
        'driver' => 'mysql',
        'host' => "127.0.0.1",
        'database' => "acredito_acredito",
        'username' => "root",
        'password' => "",
        'charset'   => 'utf8',
        'collation' => 'utf8_general_ci',
        'prefix' => ''
    );
   
    function conectar(){  
        try{
            $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
            $this->conn->set_charset("utf8");
        }catch(Exception $ex){
            return "Conexión no se pudo establecer";
        }
    }
    
    function desconectar(){
        try{
            $this->conn->close();
        }catch(Exception $ex){
            return $ex->getMessage();
        }
    }

    function select($query, $esLista = true){
        $this->conectar(); 
        $resultado = mysqli_query($this->conn, $query);
            
        if (!$resultado) {
            echo "Error de BD, no se pudo consultar la base de datos\n";
            echo "Error MySQL: " . mysqli_error($this->conn);
            exit;
        }
        
        $array = array();
        // Revisar si se espera un resultado o una lista
        try{
            if($esLista){
                while($row = $resultado->fetch_object()){
                    $array[] = $row; 
                } 
            }else{
                $array = $resultado->fetch_object();
            }
        }catch(Exception $e){
            $array = array();
        }

        $this->desconectar();
        return $array; 
    }

    function insert($query){
        $this->conectar();  
        mysqli_query($this->conn, $query);
        $resultado = mysqli_insert_id($this->conn);

        if (!$resultado) {
            echo "Error de BD, no se pudo consultar la base de datos\n";
            echo "Error MySQL: " . mysqli_error($this->conn);
            exit;
        }
        $this->desconectar();
        return $resultado; 
    }

    function update($query){
        $this->conectar(); 
        $resultado = mysqli_query($this->conn, $query);
            
        if (!$resultado) {
            echo "Error de BD, no se pudo consultar la base de datos\n";
            echo "Error MySQL: " . mysqli_error($this->conn);
            exit;
        }

        $this->desconectar();
        return $resultado; 
    }
}