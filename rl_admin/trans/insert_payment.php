<?php
// Simple database connection
$conn = new mysqli('localhost', 'root', '123456', 'db_ronex');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $idmember = $_POST['idmember'];
    $ornumber = $_POST['ornumber'];
    $installment = $_POST['installment'];
    $payment = $_POST['payment'];
    $aging = $_POST['aging'];
    $totalpayment =  $_POST['partial_payment'];
    $currentinstallment = $_POST['moc'];





    $effectdate =  $_POST['effectdate'];








    // Query to select member details from the database
    $sql2 = "SELECT fname, mname, lname, price, product, pcontact, coordinator, branch, yearmonth, mopid, mopdays, pinmop
             FROM member WHERE idmember = '$idmember'";

    // Execute the query and check for errors
    $result = $conn->query($sql2);

    if (!$result) {
        // Output the error and the query
        echo "Query failed: " . $conn->error . "<br>";
        echo "SQL Query: " . $sql2;
        exit(); // Stop further execution
    }

    
    // Check if member data exists
    if ($result->num_rows > 0) {
        // Fetch the member data
        $row = $result->fetch_assoc();
        // Extract relevant details
 
        $fullname = $row['fname'] . ' ' . $row['mname'] . ' ' . $row['lname'];
        $price = $row['price'];
        $product = $row['product'];
        $pcontact = $row['pcontact'];
        $coordinator = $row['coordinator'];
        $date = date('Y-m-d');  // Set to the current date
        $branch = $row['branch'];
        $status = 'Active';
        $yearmonth =  date('Y-m');

    
        $mopid = $row['mopid'];





        $mopdays = $row['mopdays'];
        $pinmop = $row['pinmop'];



        // Query to get commission based on mop and pinmop
        $comm = "SELECT commission,spotcash,days,moc FROM mop WHERE id = '$mopid' ";
        $resultcomm = $conn->query($comm);


        if (!$resultcomm) {
            // Output the error and the query
            echo "Query failed: " . $conn->error . "<br>";
            echo "SQL Query: " . $comm;
            exit(); // Stop further execution
        }

        // Check if the commission query returned any results
        if ($resultcomm->num_rows > 0) {
            $rowComm = $resultcomm->fetch_assoc();
            $commission = $rowComm['commission'];
            $spotcash = $rowComm['spotcash'];
            $days = $rowComm['days'];
            $limitcomm = $rowComm['moc'];
           
           
        } else {
            echo "No commission found for mopid: $mopid and pin: $pinmop<br>";
        }
        




        

// Calculate the balance
$balance = $spotcash - ($payment + $totalpayment);

// Create a new DateTime object based on $effectdate
$effectDateTime = new DateTime($effectdate);

// Modify the date by adding the calculated number of days
$effectDateTime->modify('+' . ($days * $installment) . ' days');

// Format the new due date as 'Y-m-d'
$duedate = $effectDateTime->format('Y-m-d');

// Set the current date for the payment record
$currentDate = date('Y-m-d');


if (($currentinstallment + $installment) <= $limitcomm) {
    // When the current installment is within or exactly at the limit
    $agentcomm = $commission * $installment;
    $ncomm = 0;

} else if (($currentinstallment + $installment) > $limitcomm) {
    // When the current installment exceeds the limit

    // Calculate the portion within the limit
    $remaining_limit = $limitcomm - $currentinstallment;
    $excess_installment = $installment - $remaining_limit;


    // Calculate commissions
    $remaining = $commission * $remaining_limit;
    $excess = $commission * $excess_installment;

    // Check if both values are positive
    if ($remaining >= 0 && $excess >= 0) {
        // Both values are positive, no changes needed
        $agentcomm = $commission * $remaining_limit;
        $ncomm = $commission * $excess_installment;


    } else {
        // Handle negative values by adjusting commissions accordingly
        if ($remaining < 0 ) {
            // If $agentcomm is negative, subtract $ncomm from $agentcomm
          
            $ncomm = $commission * $installment;  // Adjust ncomm by subtracting $b from $a
            $agentcomm = 0;     // Set $agentcomm to 0
        }

        if ($excess < 0) {
            // If $ncomm is negative, subtract $agentcomm from $ncomm
         
            $ncomm =  $commission * $installment;// Adjust ncomm by subtracting $b from $a
            $agentcomm = 0;     // Set $agentcomm to 0
        }
    }
}






// Insert payment data into the `payment` table
$sql = "INSERT INTO payment (idmember, ornumber, installment, amount, effectdate, duedate, fullname, price, product, balance, aging, pcontact, coordinator, date, branch, yearmonth, comm, ncomm,status) 
        VALUES ('$idmember', '$ornumber', '$installment', '$payment', '$effectdate', '$duedate', '$fullname', '$price', '$product', '$balance', '$aging', '$pcontact', '$coordinator', '$currentDate', '$branch', '$yearmonth', '$agentcomm', '$ncomm','$status')";


        if ($conn->query($sql) === TRUE) {
        
           



 header("Location: http://localhost/ronexlife/rl_admin/trans/transaction.php?pin=" . urlencode($idmember));

exit;

                
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "No member found with ID: $idmember";
    }

    // Close the connection
    $conn->close();
} else {
    echo "Invalid access!";
}
?>
