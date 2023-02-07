<?php
    include 'sconnect.php';
    if(isset($_GET['deleteid'])){
        $sno=$_GET['deleteid'];

        $sql= "DELETE FROM `faculty` WHERE sno=$sno";
        $result= mysqli_query($con, $sql);
        if($result){
            // echo "delete sucessfully";
            header('location:readview.php');
        }
        else{
            echo "invalid error!";
        }
    }
?>