<?php
class database{
    protected $conn;

    public function __construct(){
        $this->connect();
    }

    protected function connect(){
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "web_db";

        $this->conn = new mysqli($host, $user, $pass, $db);

        if ($this->conn->connect_error) {
            die("koneksi error". $this->conn->connect_error);
        }
    }
}
?>