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

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve and sanitize form data
    $pin = $conn->real_escape_string($_POST['pin']);
    $startid = $conn->real_escape_string($_POST['startid']);
    $mop = $conn->real_escape_string($_POST['mop']);
    $price = floatval($_POST['price']);
    $days = intval($_POST['days']);
    $commission = $conn->real_escape_string($_POST['commission']);
    $moc = $conn->real_escape_string($_POST['moc']);
    $status = $conn->real_escape_string($_POST['status']);
    
    // Prepare and bind parameters (to prevent SQL injection)
    $stmt = $conn->prepare("INSERT INTO mop (pin, startid, mop, price, days, commission, moc, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $pin, $startid, $mop, $price, $days, $commission, $moc, $status);

    if ($stmt->execute()) {
        // If insertion is successful
        $response = [
            'status' => 'success',
            'pin' => $pin,
            'startid' => $startid,
            'mop' => $mop,
            'price' => $price,
            'days' => $days,
            'commission' => $commission,
            'moc' => $moc,
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
