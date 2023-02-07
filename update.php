<?php
include 'sconnect.php';
$sno=$_GET['updateid'];
    if(isset($_POST['submit'])){
        $Name=$_POST['name'];
        $Faculty=$_POST['faculty'];
        $Sem=$_POST['semester'];
    
        $sql="UPDATE `faculty` SET `sno`='',`name`='$Name',`faculty`='$Faculty',`semester`='$Sem' WHERE sno=$sno";
        $result= mysqli_query($con, $sql);
        if($result){
            // echo "data is updated";
            header("location:readview.php");
        }
        else{
            echo "something is error!";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
* {
    font-family: monospace;
}

.box {
    background-color: lightgrey;
    position: absolute;
    left: 36%;
    width: 30%
        /* margin-left: auto;
    margin-right: auto; */
}

select {
    height: 42px;
    width: 100%;
}

.input {
    background-color: blue;
    width: 30%;
    cursor: pointer;
    height: 30px;
}

h1 {
    margin: 40px;
    text-align: center;
}

label {
    font-weight: 500;
    font-size: x-large;
}

h3 {
    text-align: center;
}

input {
    width: 99%;
    height: 42px;
}
</style>

<body>
    <h1>Welcome admin</h1>
    <h3>ADD FACULTY</h3>
    <div class="box">

        <form method="post">
            <label>Enter your name:</label>
            <input type="text" name="name" class="name" autocomplete="off">
            <label>Enter your faculty:</label>
            <select name="faculty">
                <option>--select faculty--</option>
                <option>BIT</option>
                <option>BSC.CSIT</option>
                <option>BCA</option>
            </select><br><br>
            <label>Enter your semester:</label>
            <select name="semester">
                <option>--select the semester--</option>
                <option>1st semester</option>
                <option>2nd semester</option>
                <option>3rd semester</option>
                <option>4th semester</option>
                <option>5th semester</option>
                <option>6th semester</option>
                <option>7th semester</option>
                <option>8th semester</option>
            </select><br><br>
            <input type="submit" name="submit" value="Update Faculty">
        </form>
    </div>
</body>

</html>