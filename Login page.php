<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>

<h2>Login</h2>

<form method="post">
    Username: <br>
    <input type="text" name="username" required><br><br>

    Password: <br>
    <input type="password" name="password" required><br><br>

    <input type="submit" name="login" value="Login">
</form>

</body>
</html>

<?php
include "db.php";

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = md5($_POST['password']); // encrypt

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        echo "<p style='color:green'>Login Successful</p>";
    } else {
        echo "<p style='color:red'>Invalid Username or Password</p>";
    }
}
?>
