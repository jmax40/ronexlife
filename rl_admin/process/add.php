<?php
// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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

    // Retrieve and sanitize form data
    $pin = $conn->real_escape_string($_POST['pin']);
    $startid = $conn->real_escape_string($_POST['startid']);
    $mop = $conn->real_escape_string($_POST['mop']);
    $spotcash = floatval($_POST['spotcash']); // Adjusted to float since it represents an amount
    $price = floatval($_POST['price']);
    $days = intval($_POST['days']);
    $commission = floatval($_POST['commission']);
    $moc = intval($_POST['moc']);
    $status = $conn->real_escape_string($_POST['status']);

    // Prepare and execute the query (Added correct placeholders and bindings)
    $stmt = $conn->prepare("INSERT INTO mop (pin, startid, mop, spotcash, price, days, commission, moc, status) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssdiidis", $pin, $startid, $mop, $spotcash, $price, $days, $commission, $moc, $status);

    // Execute and check for success
    if ($stmt->execute()) {
        // Redirect to product details page with the pin value in the query string
        header("Location: ../productdetails.php?pin=" . urlencode($pin));
        exit();
    } else {
        // Output error message if query fails
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
