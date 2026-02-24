<?php 

// Database connection
$conn = mysqli_connect("localhost", "root", "", "testdb");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE IF NOT EXISTS Students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50)
)";

mysqli_query($conn, $sql);

$insert = "INSERT INTO Students (name) VALUES ('HKRH')";

mysqli_query($conn, $insert);

echo "Table created and value inserted successfully!";

mysqli_close($conn);

?>