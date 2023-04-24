<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <form action="" method="POST" class="w-6/12 mt-24 p-10 bg-gray-200 rounded shadow mx-auto">
        <h3 class="text-center font-bold text-2xl my-2">Register</h3>
        <input type="text" name="username" placeholder="Enter Username" class="p-4 rounded block w-full my-2">
        <input type="password" name="password" placeholder="Enter Password" class="p-4 rounded block w-full my-2">

        <input type="submit" value="Register" name="register" class="p-2 text-white bg-blue-600 rounded block w-6/12 mx-auto">
        <p>Already registered? <a href="/bca4thSL/login/login.php">Login</a></p>

    </form>
</body>
</html>

<?php
if(isset($_POST['register']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $con = mysqli_connect('localhost','root','','bca2077');
    if($con === false)
    {
        die('error on connectoin');
    }

    $qry = "INSERT INTO users(username,password) VALUES ('$username',md5('$password'))";

    if(mysqli_query($con,$qry))
    {
        echo 'You are registered successfully. Now you can login';
    }
    else
    {
        echo 'Error';
    }
}
?>