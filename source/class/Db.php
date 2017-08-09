<?php
class Db{
    private $hostname="localhost";
    private $username="root";
    private $password="root";
    private $db_name="ballvip";

    public function db_connect(){
        $db=new mysqli($this->hostname,$this->username,$this->password,$this->db_name);
        if($db->connect_error){
            return die($db->connect_error);
        }
        return $db;
    }

    public function __construct()
    {
        $this->db_connect();
    }
}