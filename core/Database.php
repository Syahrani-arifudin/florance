<?php
class Database {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "florence";
    public $conn;

    public function __construct() {
        try {
            $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
            if ($this->conn->connect_error) {
                throw new Exception("Koneksi gagal: " . $this->conn->connect_error);
            }
        } catch (Exception $e) {
            die("Kesalahan koneksi: " . $e->getMessage());
        }
    }

    public function closeConnection() {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}
