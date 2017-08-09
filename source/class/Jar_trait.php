<?php

trait Jar_trait{

    public function simpleQuery($query){
        return $run= $this->con->query($query);
    }

    public function runQuery($query){
        $run= $this->con->query($query);
        while ($row =$run->fetch_object()){
            $result[]=$row;
        }
        if (!empty($result)){
            return $result;
        }else{
            return false;
        }
    }

    public function insert($data)
    {
        $query="INSERT INTO ".$this->table;
        if(count($data)!==0){
            foreach($data as $key=>$value){
                $column[]=$key;
                $insert_data[]=$value;
            }
            $query.=" (`".implode("`, `", $column)."`)";
            $query.=" VALUES ('".implode("', '", $insert_data)."') ";
            $result=$this->con->query($query);
            return $result;
        }

    }

    public function update($data,$where)
    {
            for($i = 0; $i < count($where); $i++)
            {
                if($i%2 != 0)
                {
                    if(is_string($where[$i]))
                    {
                        if(($i+1) != null)
                            $where[$i] = '"'.$where[$i].'" AND ';
                        else
                            $where[$i] = '"'.$where[$i].'"';
                    }
                }
            }
            $where = implode('=',$where);


            $update = 'UPDATE '.$this->table.' SET ';
            $keys = array_keys($data);
            for($i = 0; $i < count($data); $i++)
            {
                if(is_string($data[$keys[$i]]))
                {
                    $update .= $keys[$i].'="'.$data[$keys[$i]].'"';
                }
                else
                {
                    $update .= $keys[$i].'= '.$data[$keys[$i]];
                }

                // Parse to add commas
                if($i != count($data)-1)
                {
                    $update .= ' , ';
                }
            }
            $update .= ' WHERE '.$where;
        return $reult=$this->con->query($update);

    }

    public function last_id(){
        $last_id = $this->con->insert_id;
        return $last_id;
    }

    public function strtodate($date){
        return date("Y-m-d", strtotime($date));
    }

    public function randomNumber($length) {
        $result = '';

        for($i = 0; $i < $length; $i++) {
            $result .= mt_rand(0, 9);
        }

        return $result;
    }
    public function input_filter($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = strip_tags($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}