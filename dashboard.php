
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
h1{
    text-align: center;
}


</style>

<body>
    <!-- <h1>Welcome Admin</h1> -->
    <!-- this is navbar  -->
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
        <li><a href="">Logout</a></li>
    </ul>
    <!-- navbar ends here  -->

    <h1>Welcome admin</h1>
    <h1>Hello admin, welcome to student management dashboard
        for this system we used php form server side scriptyng
        langauge and mysql as a database.This is simple project
        that can explain CURD operation in PHP and MYSQL
        Press Add faculty
        to add student faculty and name and press register button from
        navbar to register student in this organization/school/college.
        After once you complete the registration please logout the 
        system for security purpose.
    </h1>
    <!-- <h3>ADD FACULTY</h3>
    <div class="box">

        <form method="post">
            <label>Enter your faculty:</label>
            <select name="faculty">
                <option>BIT</option>
                <option>BSC.CSIT</option>
                <option>BCA</option>
            </select><br><br>
            <label>Enter your semester:</label>
            <select name="semester">
                <option>1st semester</option>
                <option>2nd semester</option>
                <option>3rd semester</option>
                <option>4th semester</option>
                <option>5th semester</option>
                <option>6th semester</option>
                <option>7th semester</option>
                <option>8th semester</option>
            </select><br><br>
            <input type="submit" name="submit" value="Add Faculty">
        </form>
    </div> -->
</body>

</html>