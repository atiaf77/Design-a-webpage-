<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webpage_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$age = isset($_POST['age']) ? intval($_POST['age']) : 0;

if (empty($name) || $age <= 0) {
    echo "<div style='color: red; font-family: Arial; font-size: 16px;'>Error: Name and age are required and must be valid.</div>";
    exit;
}

$sql = "INSERT INTO records (name, age, status) VALUES ('$name', $age, 0)";

if ($conn->query($sql) === TRUE) {
    echo "<div style='color: green; font-family: Arial; font-size: 16px;'>Record added successfully!</div>";
} else {
    echo "<div style='color: red; font-family: Arial; font-size: 16px;'>Error: " . $sql . "<br>" . $conn->error . "</div>";
}

$conn->close();
?>
