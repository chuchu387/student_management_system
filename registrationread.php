<?php
include 'rconnect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration of Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
.table{
    margin-top:180px;
}
.btn-secondary{
    height: 43px;
    position: absolute;
    right: 51%;
    top: 30%;
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
        <li><a href="registration.php">Register</a></li>
        <li><a href="">View statistics</a></li>
        <li><a href="login.php">Logout</a></li>
    </ul>
    <h1>Welcome Admin to Student record</h1>
    <button class="btn btn-secondary"><a href="registration.php" class="text-dark">Register</a></button>
    <table>
    <table class="table my-10">
        <thead>
            <tr>
                <th scope="col">redgno</th>
                <th scope="col">Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Faculty</th>
                <th scope="col">Parents Name</th>
                <th scope="col">Country</th>
                <th scope="col">Nationality</th>
                <th scope="col">City</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile Number</th>
                <th scope="col">Result</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM `student_registration`";
            $record= mysqli_query($con, $sql);
            if($record){
                while($row=mysqli_fetch_assoc($record)){
                    $redgno=$row['redgno'];
                    $firstname=$row['firstname'];
                    $gender=$row['gender'];
                    $faculty=$row['selectcourse'];
                    $parents=$row['parentsname'];
                    $country=$row['country'];
                    $nationality=$row['nationality'];
                    $city=$row['city'];
                    $email=$row['email'];
                    $mobile=$row['mobileno'];
                    $result=$row['gpa12'];
                    echo '<tr>
                    <th scope="row">'.$redgno.'</th>
                    <td>'.$firstname.'</td>
                    <td>'.$gender.'</td>
                    <td>'.$faculty.'</td>
                    <td>'.$parents.'</td>
                    <td>'.$country.'</td>
                    <td>'.$nationality.'</td>
                    <td>'.$city.'</td>
                    <td>'.$email.'</td>
                    <td>'.$mobile.'</td>
                    <td>'.$result.'</td>
                    <td><button><a href="registrationdelete.php? registrationdeleteid='.$redgno.'">delete</a></button>
                    <button><a href="registrationupdate.php? registrationupdateid='.$redgno.'">update</a></button></td>
                </tr>';
                }
            }
            ?>
        </tbody>
    </table>
    </table>
</body>

</html>