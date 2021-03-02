<?php 


class db{
    
    private $user ;
    private $host;
    private $pass ;
    private $db;
    private $charset;

    public function __construct()
    {
        $this->user = "root";
        $this->host = "localhost";
        $this->pass = "";
        $this->db = "promocode";
        $this->charset = "utf8";
    }
 public function connect()
   {
        $db = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname.";charset=".$this->charset, $this->user, $this->password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        return $db;
   }
  
  
    
}