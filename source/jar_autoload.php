<?php
session_start();
function __autoload($class){
    require_once "../jargyi/$class.php";
}

