<?php
//include လုုပ္တယ္ autoload file
include 'jar_autoload.php';

//include လုုပ္ထားလုုိ႔ jargyi folder ထဲမွာ ရွိတဲ့ class name ကိုု obj ေဆာက္လိုု႔ရတာ
$db = new DB();

$p_name = $_POST['name'];
$p_password = $_POST['password'];
//var_dump($db->pass_hack($p_password));exit;

//obj ထဲက getRows function ေလးကိုု ေခၚသံုုးတာပါ။သူကုုိသံုုးဖုုိ႔ကေတာ့ table name ပဲထည့္လုုိက္ရင္ data return ျပန္ေပးပါလိမ့္မယ္
$where = ['where' => ['name' => $p_name]];
$data = $db->getRows('admin', $where);
if ($data) {
    //loop ပတ္ၿပီး data ကုုိ variable တခုုထဲထည့္ရင္ရပါတယ္..loop မပတ္ခ်င္ဘူးဆုုိရင္ တခါတည္း တန္းေခၚလိုု႔ရပါတယ္.. eg. $data[0]->username,
//    echo @$password = $data[0]->password;
    foreach ($data as $k=>$v){
        $password=$v['password'];
    }

    if (password_verify($p_password, $password)) {
        $_SESSION['username'] = $username;
        $_SESSION['admin'] = $username;
        echo "<script>window.location.assign('../admin_main.php');</script>";
    } else {
        echo "<script>alert('Password doesn\'t match');window.location.assign('../login.php')</script>";
    }
} else {
    echo "<script>alert('Username doesn\'t exists');window.location.assign('../login.php')</script>";
}



//include 'autoload.php';
//if(!empty($_POST)){
//    //Create Object From Class Folder
//    $check= new Db_Controller();
//
//    //Set the Database Table name for use
//    $check->table="admin";
//
//    //Input Data Filter By Bulit class, such as htmlspecialchars,strip_tags and so on
//    $post=$_POST;
//    $username=$check->input_filter($post['username']);
//    $password=$check->input_filter($post['password']);
//
//    //Check username is available
//
//    $check_admin=$check->runQuery("select * from admin where name="."'$username'");
//
//    if($check_admin==true){
//        $admin_pass=$check_admin[0]->password;
//        if($admin_pass==$password){
//            $_SESSION['username']=$username;
//            $_SESSION['admin']=$username;
//            echo "<script>window.location.assign('../admin_main.php');</script>";
//        }else{
//            echo "<script>alert('Password doesn\'t match');window.location.assign('../admin.php')</script>";
//        }
//
//    }else{
//        echo "<script>alert('Username doesn\'t exists');window.location.assign('../admin.php')</script>";
//    }
//}