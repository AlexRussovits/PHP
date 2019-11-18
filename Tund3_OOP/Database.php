<?php
class database {
    private $conn;
    private $host;
    private $user;
    private $password;
    private $baseName;

    function__construct() {
        $this->host = 'localhost';
        $this->user = 'root';
        $this->password = 'crucial';
        $this->baseName = 'newsportal';
        $this->connect();
    }

    function__destruct {
        $this->disconnect();
    }

    function connect() {
        try {
            $this conn = new PDO(
                'mysql:host='.$this->host.''
                .';dbname='.$this->baseName.'',
                $this->user,
                $this->password,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        } catch (Exception $e) {
            die ('Connection failed :'.$e->getMessage());
        }
        return $this-> conn;
    }

    function disconnect() {
        if ($this->conn) {
            $this->conn = null;
        }
    }
}

?>