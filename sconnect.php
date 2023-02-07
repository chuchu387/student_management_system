
<?php
$server= "localhost";
$username="root";
$password="";
$dbname="create";

$con= mysqli_connect($server, $username, $password, $dbname);
if(!$con){
    echo "not connected";
}
?>