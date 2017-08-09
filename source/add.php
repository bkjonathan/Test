<?php
$post=$_POST;

include 'jar_autoload.php';

$db = new DB();
$data=[
    'date'=>$db->strtodate($post['date']),
    'home'=>$post['home'],
    'odd'=>$post['odd'],
    'away'=>$post['away'],
    'tips'=>$post['tips'],
    'score'=>$post['score'],
    'result'=>$post['result'],
    'status'=>1
];

$jj=$db->getRows('main',[
    'where'=>['status'=>1],
    'return_type'=>'count'
]);
if($jj>=3){
    $update_data=$db->getRows('main',['where'=>['status'=>1],'order_by'=>'id ASC']);
    $update_id=$update_data[0]['id'];
    $db->update('main',['status'=>0],["where"=>['id'=>$update_id]]);
}

$query=$db->insert('main',$data);
if ($query){
    echo "<script>alert('Match Add');window.location.assign('../admin_main.php')</script>";
}
