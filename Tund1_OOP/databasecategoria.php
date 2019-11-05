<?php
include_once 'categoria.php';

class DBMySQL{
    private static $servername = "localhost";
    private static $username = "admin";
    private static $password = "top";
    private static $db= "koolitused";

    public static function getAllCategorias() {
        $allcat = array();

    }

    // Create Connection
    $conn = mysqli_connect(self::$servername,self::$username,self::$password,self::$db);
    
    //Check Connection

    if (!$conn) {
        die("Connection failed: ". mysqli_connect_error());
    }
    else {
        if ($result = $conn->query("SELECT id,Nimetus,Kirjeldus FROM Categoria")) {
            while ($obj = $result->fetch_object()) {
                $allcat[] = new Categoria($obj->id,$obj->Nimetus,$obj->Kirjeldus);
                
            }
        /*
        free result set
        */
        $result->close();
        }
    }

$conn->close();

return $allcat;
}


public static function getCategoriaById($id) {
    // Create Connection
    $conn = mysqli_connect(self::$servername,self::$username,self::$password,self::$db);
    
    //Check Connection

    if (!$conn) {
        die("Connection failed: ". mysqli_connect_error());
    }
    else {
        if ($result = $conn->query("SELECT id,Nimetus,Kirjeldus FROM Categoria WHERE id=".(string)$id) {
            while ($obj = $result->fetch_object()) {
                $cat[] = new Categoria($obj->id,$obj->Nimetus,$obj->Kirjeldus);
                
            }
        /*
        free result set
        */
        $result->close();
        }
    }

$conn->close();

return $cat;
}

}









?>