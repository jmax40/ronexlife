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

// Initialize an array to hold the total number of members for each branch
$branchTotals = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve and sanitize input dates
    $startdate = isset($_POST['startdate']) ? $_POST['startdate'] : '';
    $enddate = isset($_POST['enddate']) ? $_POST['enddate'] : '';

    // Check if both dates are provided
    if (!empty($startdate) && !empty($enddate)) {
        // Prepare SQL query to select records within the date range
        $sql = "SELECT branch, COUNT(*) as total_members 
                FROM member 
                WHERE edate BETWEEN '$startdate' AND '$enddate' 
                GROUP BY branch";

        // Execute the SQL query
        $result = $conn->query($sql);

        // Check if any records were returned
        if ($result->num_rows > 0) {
            // Process each row and store the total members count for each branch
            while ($row = $result->fetch_assoc()) {
                $branch = $row['branch'];
                $totalMembers = $row['total_members'];

                $branchTotals[$branch] = $totalMembers; // Store the total members for each branch
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
$jsonBranchTotals = json_encode($branchTotals);
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

// Initialize an array to hold the transactions
$transactions = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve and sanitize input dates
    $startdate = isset($_POST['startdate']) ? $_POST['startdate'] : '';
    $enddate = isset($_POST['enddate']) ? $_POST['enddate'] : '';

    // Check if both dates are provided
    if (!empty($startdate) && !empty($enddate)) {
        // Prepare SQL query to select records within the date range
        $sql = "SELECT date, branch, product, amount FROM payment WHERE date BETWEEN '$startdate' AND '$enddate' ORDER BY date";

        // Execute the SQL query
        $result = $conn->query($sql);

        // Check if any records were returned
        if ($result->num_rows > 0) {
            // Process each row and group by date and product
            while ($row = $result->fetch_assoc()) {
                $date = $row['date'];
                $product = $row['branch'];
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















