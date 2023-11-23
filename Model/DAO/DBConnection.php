<?php
class DBConnection{
    private $db;
    public function __construct(){
    }
public function getConnection(){
    try {
        if (!isset($this->db)) {
            $this->db = new PDO('mysql:host=localhost;dbname=tilh', 'root', '');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
        }
        return $this->db;
    } catch (PDOException $e) {
        // Handle connection error
        // You can log the error, echo a message, or handle it in any way suitable for your application
        echo "Connection failed: " . $e->getMessage();
        // Optionally, you can re-throw the exception if you want it to propagate further
        // throw $e;
    }
}

}