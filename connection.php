<?php
    $con = mysqli_connect("localhost","root","","db_crud");

    if(mysqli_connect_errno()){
        die("Cannot Connect to DataBase".mysqli_connect_errno());
    }

    define("UPLOAD_SRC",$_SERVER['DOCUMENT_ROOT']."/crud_php_db/upload/");
    
?>