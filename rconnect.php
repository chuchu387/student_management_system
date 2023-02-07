<?php
    $server="localhost";
    $username="root";
    $password="";
    $dbname="student";

    $con= mysqli_connect($server, $username, $password, $dbname);
    if(!$con){
        echo "database is not connected!";
    }
?>