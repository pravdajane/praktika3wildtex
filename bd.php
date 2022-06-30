<?php
class Connect
{
    private $port;
    private $db;
    private $db_usr;
    private $db_pwd;
    private $db_enc;
    
    private $conn;
    
    public function __construct() {
        $conf = parase_ini_file("bd.ini");
        $this->host = $conf["host"];
        $this->port = $conf["port"];
        $this->db = $conf["db"];
        $this->db_usr = $conf["db_usr"];
        $this->db_pwd = $conf["db_pwd"];
        $this->db_enc= $conf["db_enc"];
    }
    private function getDB(){
        $this->conn = new PDO('mysql:host='.$this->host.':'.$this->port.';charset='.$this->db_enc.';dbname='.$this->db, $this->db_usr, $this->db_pwd);
        }
        public function selectAll($sql) {
            $query = $this->conn->prepare($sql);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
        public function RequestExecution($request) {
            $sql = $request;
            $query = $this->conn->prepare($sql);
            $query->execute();
            }
        public function selectAllWithParam($sql, $data) {
            $query = $this->conn->prepare($sql);
            $query->execute($data);
            return $query->fetchAll(PDO::FETCH_ASSOC);
            }
        public function GetFirstCell($sql) {
            $result = $this->connection->prepare($sql);
            $result->execute();
            $array = $result->fetchAll(PDO::FETCH_COLUMN);
            return $array[array_key_first($array)];
            }
        public function count($sql) {
            $query = $this->conn->prepare($sql);
            $query->execute();
            return count($query->fetchAll(PDO::FETCH_ASSOC));
            }
        public function insert($sql, $data) {
            $query = $this->conn->prepare($sql);
            $query->execute($data);
            }       
}
?>