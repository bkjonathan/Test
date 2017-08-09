<?php
class Pagination extends Db{
    private $con;
    public static $table=null;
    public static $per_page=15;
    public static $start=1;
    use Jar_trait;

    public function pagination(){
        $query="select count(*) as num from ".self::$table;
            $nums=$this->runQuery($query);
            foreach ($nums as $num){
                $num=$num->num;
            }

            $max_pages = ceil($num / self::$per_page);
            $startpoint = (self::$start * self::$per_page) - self::$per_page;
            $next=self::$start+1;
            $pre=self::$start-1;
            $per_page=self::$per_page;

            $result=$this->runQuery("SELECT * FROM ".self::$table." order by id desc LIMIT {$startpoint} , {$per_page}");
        return $data=['per_page'=>self::$per_page,'start'=>self::$start,'max_pages'=>$max_pages,'next'=>$next,'per'=>$pre,'per_page'=>$per_page,'data'=>$result];


    }

    public function __construct()
    {
        $this->con=$this->db_connect();
    }

}