<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webpage_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM records";
$result = $conn->query($sql);

$records = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $records[] = $row;
    }
}

echo json_encode($records);

$conn->close();
?>
