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

// Check which data to fetch based on the 'type' parameter
$type = isset($_GET['type']) ? $_GET['type'] : '';

// Initialize the query and data array
$sql = '';
$data = array();

if ($type === 'promo') {
    $sql = "SELECT pin, productname, status FROM promo";
} elseif ($type === 'mop') {
    $sql = "SELECT startid, mop, price, days, commission, moc, status FROM mop";
} elseif ($type === 'transaction') {
    $sql = "SELECT id, date FROM payment";  // Include startid
}

if ($sql !== '') {
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // Loop through each row
        while ($row = $result->fetch_assoc()) {
            // Store fetched data in $data array
            $data[] = $row;
        }
    }
}

// Close database connection
$conn->close();

// Output data as JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
