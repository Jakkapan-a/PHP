<?php
class DB_Connect{
    private $host = "localhost";
    private $dbname = "my_db";
    private $username = "my_db";
    private $password = "1234";
    private $conn = null;

    public function connect(){
        try{
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname; charset=utf8",$this->username,$this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        }catch(PDOException $e){
            echo "Connection Error: ".$e->getMessage();
            exit();
        }
    }
}
$DB_CON = new DB_Connect();
$connect = $DB_CON->connect();
