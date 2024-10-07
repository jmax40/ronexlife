<?php
// Database connection settings
$servername = "localhost"; // Your server name
$username = "root"; // Your database username
$password = "123456"; // Your database password
$dbname = "db_ronex"; // Your database name

// Create connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize an array to hold the transactions
$transactions = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve and sanitize input dates
    $startdate = isset($_POST['startdate']) ? $_POST['startdate'] : '';
    $enddate = isset($_POST['enddate']) ? $_POST['enddate'] : '';

    // Check if both dates are provided
    if (!empty($startdate) && !empty($enddate)) {

        // Prepare SQL query to select records within the date range
        $sql = "SELECT * FROM member WHERE edate BETWEEN '$startdate' AND '$enddate'";

        // Execute the SQL query
        $result = $conn->query($sql);

        // Check if any records were returned
        if ($result->num_rows > 0) {
            // Fetch each row and store it in the $transactions array
            while ($transaction = $result->fetch_assoc()) {
                $transactions[] = $transaction;
            }
        } else {
            echo "<p>No records found within the selected date range.</p>";
        }
    } else {
        echo "<p>Please select both start date and end date.</p>";
    }
}

// Close the database connection
$conn->close();
?>
