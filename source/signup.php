<?php
require_once 'autoload.php';

if(!empty($_POST)){

    //Create Object From Class Folder
    $insert= new Db_Controller();

    //Set the Database Table name for use
    $insert->table="admin";

    //Input Data Filter By Bulit class, such as htmlspecialchars,strip_tags and so on
    $post=$_POST;
    $username=$insert->input_filter($post['username']);
    $password=$insert->input_filter($post['password']);

    //hash for the password for security
    $hash=password_hash($password,PASSWORD_DEFAULT);

    //Set the array for data insert, Array Key is the Database Table and value is the data.

    $data=[
        'username'=>$username,
        'password'=>$hash,

    ];

    //Insert into Database
    $sign_up=$insert->insert($data);

    //Login

    if($sign_up==true){
        echo "<script>alert('Sign Up Successfully');window.location.assign('../admin_main.php')</script>";

    }else{
        echo "<script>alert('Sign Up Fail...');window.history.back();</script>";
    }


}