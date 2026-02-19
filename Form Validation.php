<?php 
$name = $age = $Address = $email = $phone = "";
$error = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST["name"];
    $age = $_POST["age"];
    $Address = $_POST["Address"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    if(empty($name) || empty($age) || empty($Address) || empty($email) || empty($phone)){
        $error = "All Fields Are Required!";
    }
    elseif(!is_numeric($age)){
        $error = "age must be a number!";
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = "Invalid email format!";
    }
    else{

        echo "<h2>Entered Details</h2>";
        echo "Name: $name<br><br>";
        echo "Age: $age<br><br>";
        echo "Address: $Address<br><br>";
        echo "Email: $email<br><br>";
        echo "Phone: $phone<br><br>";

        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<body>
<h2>Simple Form</h2>

<p style="color:red;">
<?php echo $error; ?>
</p>

<form method="POST">
Name: <input type="text" name="name"><br><br>
Age: <input type="text" name="age"><br><br>
Address: <input type="text" name="Address"><br><br>
Email: <input type="text" name="email"><br><br>
Phone: <input type="text" name="phone"><br><br>

<input type="submit" value="submit">
</form>

</body>
</html>

