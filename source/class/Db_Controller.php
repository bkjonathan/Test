<?php
class Db_Controller extends Db{
    private $con;
    public $table="4star";
    use Jar_trait;



    public function __construct()
    {
        $this->con=$this->db_connect();
    }
}