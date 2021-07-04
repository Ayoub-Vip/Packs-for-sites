<?php

$lang=substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
switch($lang){
    case "ar":
        header("location:index-ar.php");
        break;
    default:
        header("location:index-an.php");
        break;
}

?>