<?php 
    $dbServer = "root";
    $dbUser = "localhost";
    $dbPass = "";
    $dbName = "gradingsystem";

    try{
        $conn = mysqli_connect($dbUser, $dbServer, $dbPass, $dbName);
    }
    catch(mysqli_sql_exception){
        echo "could not connect";
    }

?>