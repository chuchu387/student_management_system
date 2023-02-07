<?php
    include 'sconnect.php';
    if($_SERVER['REQUEST_METHOD'] == "POST"){

        if(null !==(['submit'])){
            $Name=$_POST['name'];
            $Faculty= $_POST['faculty'];
            $Sem= $_POST['semester'];
    
            $sql = "INSERT INTO `faculty`(`sno`, `name`, `faculty`, `semester`) VALUES ('','$Name','$Faculty','$Sem')";
    
            $result= mysqli_query($con, $sql);
    
            if($result){
                echo "data is submitted sucessfully";
            }
            else{
                echo "data is not submitted, please enter valid data or query inalid";
            }
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
    padding: 0;
    margin: 0;
    font-family: monospace;
}

ul {
    list-style: none;
    background: #22438C;
}

ul li {
    display: inline-block;
    position: relative;
}

ul li a {
    display: block;
    padding: 20px 25px;
    color: #fff;
    text-decoration: none;
    text-align: center;
    font-size: 20px;
}

ul li ul.dropdown li {
    display: block;
}

ul li ul.dropdown {
    width: 100%;
    background: #22438C;
    position: absolute;
    z-index: 999;
    display: none;
}

ul li a:hover {
    background: #112C66;
}

ul li:hover ul.dropdown {
    display: block;
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
input{
    width: 99%;
    height: 42px;
}
</style>

<body>
    <!-- <h1>Welcome Admin</h1> -->
    <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li>
            <a href="">Course </a>
            <ul class="dropdown">
                <li><a href="create.php">Add faculty</a></li>
                <li><a href="readview.php">View faculty</a></li>
            </ul>
        </li>
        <li>
            <a href="">Subject</a>
            <ul class="dropdown">
                <li><a href="">Add subject</a></li>
                <li><a href="">View subject</a></li>
            </ul>
        </li>
        <li><a href="registration.php">Register</a></li>
        <li><a href="registrationread.php">View statistics</a></li>
        <li><a href="login.php">Logout</a></li>
    </ul>


    <h1>Welcome admin</h1>
    <h3>ADD FACULTY</h3>
    <div class="box">

        <form action="" method="post">
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
            <input type="submit" name="submit" value="Add Faculty" class="input">
        </form>
    </div>
</body>

</html>