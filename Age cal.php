<!DOCTYPE html>
<html>
<head>
    <title>Simple Age Calculator</title>
</head>
<body>

<h1>Age Calculator</h1>

<form method="post">
    <label>Enter Your Date of Birth:</label><br><br>
    <input type="date" name="dob" required>
    <br><br>
    <input type="submit" name="submit" value="Calculate Age">
</form>

<?php
if(isset($_POST['submit']))
{
    $dob = $_POST['dob'];
    $today = date("Y-m-d");

    $diff = date_diff(date_create($dob), date_create($today));

    echo "<h3>Your Age is: " . $diff->y . " years</h3>";
}
?>

</body>
</html>
