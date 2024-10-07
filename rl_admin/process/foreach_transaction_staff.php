
<?php
// your-script.php



$now = new DateTime();
$time = $now->format('h:i:s A');
$day = $now->format('d');  
$month = $now->format('m'); 
$year = $now->format('Y');
$date = $now->format('Y-m-d');


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


$member_id = isset($_GET['pin']) ? $_GET['pin'] : '';

// Escape the member_id to prevent SQL injection
$member_id = $conn->real_escape_string($member_id);

// Assuming $member_id is defined
// SQL query to find the member(s)
$sql = "SELECT * FROM payment WHERE coordinator = '$member_id' ";
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







