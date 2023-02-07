<?php
    include 'sconnect.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>view</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

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



/* .box {
    background-color: lightgrey;
    position: absolute;
    left: 36%;
    width: 30%
}

select {
    height: 42px;
    width: 100%;
}

input {
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
} */
</style>


<body>
    <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li>
            <a href="">Course </a>
            <ul class="dropdown">
                <li><a href="create.php">Add faculty</a></li>
                <li><a href="">View faculty</a></li>
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
    <table class="table my-8">
        <thead>
            <tr>
                <th scope="col">sno</th>
                <th scope="col">Name</th>
                <th scope="col">faculty</th>
                <th scope="col">semester</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM `faculty`";
            $result= mysqli_query($con, $sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $sno=$row['sno'];
                    $name=$row['name'];
                    $faculty=$row['faculty'];
                    $semester=$row['semester'];
                    echo '<tr>
                    <th scope="row">'.$sno.'</th>
                    <td>'.$name.'</td>
                    <td>'.$faculty.'</td>
                    <td>'.$semester.'</td>
                    <td><button><a href="delete.php? deleteid='.$sno.'">delete</a></button>
                    <button><a href="update.php? updateid='.$sno.'">update</a></button></td>
                </tr>';
                }
            }
            ?>
        </tbody>
    </table>
</body>

</html>