<?php


$now = new DateTime();
$time = $now->format('h:i:s A');
$day = $now->format('d');  
$month = $now->format('m'); 
$year = $now->format('Y');
$date = $now->format('Y-m-d');




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

// Get the Member ID from the GET request
$member_id = isset($_GET['pin']) ? $_GET['pin'] : '';

// Escape the member_id to prevent SQL injection
$member_id = $conn->real_escape_string($member_id);

// SQL query to find the member using prepared statements
$sql = "SELECT * FROM member WHERE idmember = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $member_id);
$stmt->execute();
$result = $stmt->get_result();

// Check if the member exists
if ($result->num_rows > 0) {
    // Fetch the member data
    $member = $result->fetch_assoc();
    $member_data = [
        'pin' => $member['idmember'],
        'fname' => $member['fname'],
        'mname' => $member['mname'],
        'lname' => $member['lname'],
        'price' => $member['price'],
        'suffix' => $member['suffix'],
    ];
} else {
    $member_data = null;
}

// Close the connection
$stmt->close();
$conn->close();

// You can then use $member_data for further processing
?>





<?php
// your-script.php

// Database connection settings
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

// Assuming $member_id is defined
// SQL query to find the member(s)
$sql = "SELECT * FROM payment WHERE idmember = '$member_id'";
$result = $conn->query($sql);

// Array to store all transactions
$transactions = [];

// Check if any members exist
if ($result->num_rows > 0) {
    // Fetch all member data
    while ($member = $result->fetch_assoc()) {
        $transactions[] = [
           
          
            'effectdate' => $member['effectdate'],
            'duedate' => $member['duedate'],
            'ornumber' => $member['ornumber'],
            'installment' => $member['installment'],
            'product' => $member['product'],
            'amount' => $member['amount'],
            'aging' => $member['aging'],
            'comm' => $member['comm'],
            'ncomm' => $member['ncomm'],
            'balance' => $member['balance'],
            'idmember' => $member['idmember'],
            'id' => $member['id'],
            


            // Add other relevant fields here
        ];
    }
} else {
    $transactions = null;
}

// Close the connection
$conn->close();
?>






<?php
// Database connection parameters
$servername = "localhost"; // Replace with your server name
$username = "root";        // Replace with your username
$password = "123456";      // Replace with your password
$dbname = "db_ronex";      // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize $distantdate to avoid undefined variable issues
$distantdate = 0; // Default value

// Create a DateTime object for the current date
$now = new DateTime();
$effectdate = $now->format('Y-m-d');

// Query to check for empty effectdate
$sql = "SELECT COUNT(*) AS count FROM payment WHERE idmember = '$member_id' AND (effectdate IS NULL OR effectdate = '')";
$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_assoc();
    $count = $row['count'];

    
    if ($count > 0) {
        // Records with empty effectdate exist, use current date
        $effectdate = $now->format('Y-m-d');
    } else {
        // Query to get effectdate if none are empty
        $sql = "SELECT duedate FROM payment WHERE idmember = '$member_id' ORDER BY id DESC LIMIT 1";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $effectdate = $row['duedate']; 
        
            // Check if the duedate is valid and not null
            if (!empty($effectdate)) {
                // Convert $effectdate to a DateTime object
                try {
                    $effectDateObj = new DateTime($effectdate);
        
                    // Get the current date
                    $currentDate = new DateTime(); 
        
                    // Calculate the difference in days
                    $interval = $currentDate->diff($effectDateObj);
        
                    // Handle empty, zero, or null effectDateObj
                    if (empty($effectDateObj) || $effectDateObj == '0' || $effectDateObj == null) {
                        $distantdate = 0;
                    } else {
                        // Proceed with checking the dates
                        if ($effectDateObj > $currentDate) {
                            // Future date: negative days difference
                            $distantdate = 0;
                        } else {
                            // Past date: positive days difference
                            $distantdate = $interval->days;
                        }
                    }
        
                } catch (Exception $e) {
                    echo "Invalid date format in duedate.";
                }
            } else {
                echo "Duedate is empty or invalid.";
            }
        }
    }
} else {
    echo "Error: " . $conn->error;
}

// Close connection
$conn->close();

?>








<?php
// Database connection parameters
$servername = "localhost"; // Replace with your server name
$username = "root";        // Replace with your username
$password = "123456";      // Replace with your password
$dbname = "db_ronex";      // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assume the ID is 'm005'

// SQL query to sum the amount where idmember is given
$sql = "SELECT SUM(amount) AS total_amount, SUM(installment) AS total_installment FROM payment WHERE idmember = ?";

$total_amount = 0; // Default value
$total_installment = 0; // Default value

if ($stmt = $conn->prepare($sql)) {
    // Bind the ID parameter to the query
    $stmt->bind_param("s", $member_id); // "s" is for string

    // Execute the statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Fetch the row and check if the sum is null or empty
    if ($row = $result->fetch_assoc()) {
        $total_amount = ($row['total_amount'] !== null) ? $row['total_amount'] : 0; 
        $total_installment = ($row['total_installment'] !== null) ? $row['total_installment'] : 0; // Ensure default of 0 if null
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>