<?php
include 'rconnect.php';
if(isset($_GET['registrationdeleteid'])){
    $redgno=$_GET['registrationdeleteid'];

    $sql= "DELETE FROM `student_registration` WHERE redgno=$redgno";
    $record= mysqli_query($con, $sql);
    if($record){
        // echo "data is deleted";
        header("location:registrationread.php");
    }
    else{
        echo "something is error!";
    }
}
?>