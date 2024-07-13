<?php
$host = 'localhost';
$username = 'root';
$password = '123456';
$database = 'db_ronex';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT idmember, lname, brgy, edate, status FROM member";
$result = $conn->query($sql);

$data = array();

if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
} else {
    $error_message = "Error: " . $conn->error;
    // You may choose to log the error or handle it differently based on your application's requirements
    $data['error'] = $error_message;
}

$conn->close();

// Always output JSON
header('Content-Type: application/json');

// Ensure consistent response format
echo json_encode($data);
?>
