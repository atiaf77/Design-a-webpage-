<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webpage_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents('php://input'), true);
$id = $data['id'];

$sql = "UPDATE records SET status = IF(status=1, 0, 1) WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Status updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
