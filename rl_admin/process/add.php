<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "db_ronex";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the request method is MOPSAVE (custom method name)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $pin = $_POST['pin'];
    $startid = $_POST['startid'];
    $mop = $_POST['mop'];
    $price = $_POST['price'];
    $days = $_POST['days'];
    $status = $_POST['status'];
    
    
    
    
    ['status'];

    // Prepare and bind parameters (to prevent SQL injection)
    $stmt = $conn->prepare("INSERT INTO mop (pin, startid, mop, price, days, status) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $pin, $startid, $mop, $price, $days, $status);

    if ($stmt->execute()) {
        // If insertion is successful
        $response = [
            'status' => 'success',
            'pin' => $pin,
            'startid' => $startid,
            'mop' => $mop,
            'price' => $price,
            'days' => $days,
            'status' => $status
        ];
    } else {
        // If there's an error with the insertion
        $response = [
            'status' => 'error',
            'message' => $stmt->error
        ];
    }

    // Close statement
    $stmt->close();

    // Output response in JSON format
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    // Handle invalid request
    http_response_code(400);
    echo 'Invalid request';
}

// Close database connection
$conn->close();
?>
