<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "db_ronex";

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
        $sql = "SELECT date, product, amount FROM payment WHERE date BETWEEN '$startdate' AND '$enddate' ORDER BY date";

        // Execute the SQL query
        $result = $conn->query($sql);

        // Check if any records were returned
        if ($result->num_rows > 0) {
            // Process each row and group by date and product
            while ($row = $result->fetch_assoc()) {
                $date = $row['date'];
                $product = $row['product'];
                $amount = $row['amount'];

                // Initialize the date if not already in transactions
                if (!isset($transactions[$date])) {
                    $transactions[$date] = ['date' => $date];
                }

                // Add each product to the date entry with its amount
                $transactions[$date][$product] = $amount;
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

// Convert the PHP array into JSON format for JavaScript
$jsonTransactions = json_encode(array_values($transactions));
?>










<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "db_ronex";

// Create connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize an array to hold the total amounts for each product
$productTotals = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve and sanitize input dates
    $startdate = isset($_POST['startdate']) ? $_POST['startdate'] : '';
    $enddate = isset($_POST['enddate']) ? $_POST['enddate'] : '';

    // Check if both dates are provided
    if (!empty($startdate) && !empty($enddate)) {
        // Prepare SQL query to select records within the date range
        $sql = "SELECT product, SUM(amount) as total_amount FROM payment WHERE date BETWEEN '$startdate' AND '$enddate' GROUP BY product";

        // Execute the SQL query
        $result = $conn->query($sql);

        // Check if any records were returned
        if ($result->num_rows > 0) {
            // Process each row and store the total amounts for each product
            while ($row = $result->fetch_assoc()) {
                $product = $row['product'];
                $totalAmount = $row['total_amount'];

                $productTotals[$product] = $totalAmount; // Store the total amount for each product
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

// Convert the PHP array into JSON format for JavaScript
$jsonProductTotals = json_encode($productTotals);
?>










<?php 
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "db_ronex";

// Create connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize an array to hold the total amounts for each coordinator
$coordinatorTotals = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve and sanitize input dates
    $startdate = isset($_POST['startdate']) ? $_POST['startdate'] : '';
    $enddate = isset($_POST['enddate']) ? $_POST['enddate'] : '';

    // Check if both dates are provided
    if (!empty($startdate) && !empty($enddate)) {
        // Prepare SQL query to select the top 10 coordinators with the highest total amounts
        $sql = "SELECT coordinator, SUM(amount) as total_amount 
                FROM payment 
                WHERE date BETWEEN '$startdate' AND '$enddate' 
                GROUP BY coordinator 
                ORDER BY total_amount DESC 
                LIMIT 10";

        // Execute the SQL query
        $result = $conn->query($sql);

        // Check if any records were returned
        if ($result->num_rows > 0) {
            // Process each row and store the total amounts for each coordinator
            while ($row = $result->fetch_assoc()) {
                $coordinator = $row['coordinator'];
                $totalAmount = $row['total_amount'];

                $coordinatorTotals[$coordinator] = $totalAmount; // Store the total amount for each coordinator
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

// Convert the PHP array into JSON format for JavaScript
$jsonCoordinatorTotals = json_encode($coordinatorTotals);
?>