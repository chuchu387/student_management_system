<?php
include 'rconnect.php';
$redgno=$_GET['registrationupdateid'];
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['submit'])){
            $selectcourse= $_POST['registration'];
            $subject1= $_POST['subject1'];
            $subject2= $_POST['subject2'];
            $firstname= $_POST['fname'];
            $lastname= $_POST['lname'];
            $gender= $_POST['gender'];
            $parentsname= $_POST['gaurdian'];
            $parentsoccupation= $_POST['occupation'];
            $nationality= $_POST['nationality'];
            $physical= $_POST['physical'];
            $mobile= $_POST['mobile'];
            $email= $_POST['email'];
            $country= $_POST['country'];
            $city= $_POST['city'];
            $address= $_POST['permanent'];
            $board1= $_POST['board1'];
            $result1= $_POST['result1'];
            $board2= $_POST['board2'];
            $result2= $_POST['result2'];
    
            $sql = "UPDATE `student_registration` SET `redgno`='',`selectcourse`='$selectcourse',`Majorsubject1`='$subject1',`Majorsubject2`='$subject2',`firstname`='$firstname',`lastname`='$lastname',`gender`='$gender',`parentsname`='$parentsname',`parentsoccupation`='$parentsoccupation',`nationality`='$nationality',`physically`='$physical',`mobileno`='$mobile',`email`='$email',`country`='$country',`city`='$city',`permanentaddress`='$address',`board10`='$board1',`gpa10`='$result1',`board12`='$board2',`gpa12`='$result2' WHERE redgno=$redgno";
            $record= mysqli_query($con, $sql);
            if($record){
                header("location:registrationread.php");
            }
            else{
                echo "something is invalid, correct carefully......!";
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
    <title>Registration of Student</title>
</head>
<style>
body {
    background-color: skyblue;
}

* {
    margin: 0;
    padding: 0;
    font-family: monospace;
}

.course {
    margin-top: 200px;
    height: 50vh;
}

.personal {
    height: 80vh;
}

.contact {
    height: 65vh;
}

.acedemic {
    height: 50vh;
}

.box {
    background-color: lightgrey;
    position: absolute;
    left: 36%;
    width: 30%
        /* margin-left: auto;
    margin-right: auto; */
}

.box1 {
    background-color: lightgrey;
    position: absolute;
    left: 36%;
    width: 30%
        /* margin-left: auto;
    margin-right: auto; */
}

.box2 {
    background-color: lightgrey;
    position: absolute;
    left: 36%;
    width: 30%
        /* margin-left: auto;
    margin-right: auto; */
}

.box3 {
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
    width: 98%;
    height: 42px;
}

label {
    font-weight: 500;
    font-size: x-large;
}

h1 {
    text-align: center;
}

.register {
    position: absolute;
    left: 44%;
    top: 274%;
    width: 123px;
    height: 36px;
    color: #fe6e1a;
    background-color: darkslategray;
    font-size: x-large;
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
</style>

<body>
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
        <li><a href="">Register</a></li>
        <li><a href="registrationread.php">View statistics</a></li>
        <li><a href="login.php">Logout</a></li>
    </ul>

    <form method="post">
        <section class="course">
            <div class="box">
                <h1>Select Course</h1>
                <label>Select Course:</label><br>
                <select name="registration">
                    <option>--select course--</option>
                    <option>BIT</option>
                    <option>BSC.CSIT</option>
                    <option>BCA</option>
                </select><br>
                <label>Select Major subject one:</label><br>
                <input type="text" name="subject1" class="input"><br>
                <label>Select Major subject two</label><br>
                <input type="text" name="subject2" class="input">
            </div>
        </section>
        <section class="personal">
            <div class="box1">
                <h1>Personal Information</h1>
                <label>First Name:</label><br>
                <input type="text" name="fname" class="input"><br>
                <label>Last Name:</label><br>
                <input type="text" name="lname" class="input"><br>
                <label>Enter your gender:</label><br>
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="fmale">Female <br>
                <label>Enter your parents Name:</label><br>
                <input type="text" name="gaurdian" class="input"><br>
                <label>Enter your parents occupation:</label><br>
                <select name="occupation">
                    <option>Businessman</option>
                    <option>Broker</option>
                    <option>Unemployed</option>
                    <option>Government Officer</option>
                    <option>Corprate Officer</option>
                    <option>Farmer</option>
                    <option>Enterpeneur</option>
                </select><br>
                <label>Nationality:</label><br>
                <select name="nationality">
                    <option>--select your nationality--</option>
                    <option>Nepali</option>
                    <option>Indian</option>
                    <option>American</option>
                    <option>Sri-lankan</option>
                    <option>Bhutaneese</option>
                </select><br>
                <label>Physically challanged:</label><br>
                <select name="physical">
                    <option>--select--</option>
                    <option value="">Yes</option>
                    <option value="">NO</option>
                </select><br>
            </div>
        </section>
        <section class="contact">
            <div class="box2">
                <h1>Contact Information</h1>
                <label>Mobile Number</label><br>
                <input type="text" name="mobile" class="input"><br>
                <label>Email</label><br>
                <input type="email" name="email" class="input"><br>
                <label>Country</label><br>
                <select name="country">
                    <option>--select--</option>
                    <option>Nepal</option>
                    <option>India</option>
                    <option>America</option>
                    <option>Sri-lanka</option>
                    <option>Bhutan</option>
                </select><br>
                <label>City:</label><br>
                <select name="city">
                    <option value="">--select--</option>
                    <option>Nepalgunj</option>
                    <option>Kohalpur</option>
                    <option>Kathmandu</option>
                    <option>Chitwan</option>
                    <option>Mahendra-nagar</option>
                    <option>Birgunj</option>
                    <option>Pokhara</option>
                    <option>Lalitpur</option>
                    <option>Bhaktapur</option>
                    <option>Dang</option>
                    <option>Butwal</option>
                </select><br>
                <label>Permanent Addresss:</label><br>
                <input type="text" name="permanent" class="input"><br>
            </div>
        </section>
        <section class="acedemic">
            <div class="box3">
                <h1>Acedemic Information</h1>
                <label>10th Board:</label><br>
                <select name="board1">
                    <option value="">--select--</option>
                    <option>10</option>
                </select><br>
                <label>Result in GPA:</label><br>
                <input type="text" name="result1" class="input"><br>
                <label>12th Board:</label><br>
                <select name="board2">
                    <option value="">--select--</option>
                    <option>12+</option>
                </select><br>
                <label>Result in GPA:</label><br>
                <input type="text" name="result2" class="input"><br>
            </div>
        </section>
        <input type="submit" name="submit" class="register" value="Update">
    </form>
</body>

</html>