<?php
// Database connection setup (adjust the values as per your setup)
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "db_ronex"; // replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pin = mysqli_real_escape_string($conn, $_POST['pin']);
    $productname = mysqli_real_escape_string($conn, $_POST['productname']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);
    
    // File upload handling
    $fileUpload = "";
    if (isset($_FILES['fileUpload']) && $_FILES['fileUpload']['error'] == 0) {
        $file_name = $_FILES['fileUpload']['name'];
        $file_tmp = $_FILES['fileUpload']['tmp_name'];
        $fileUpload = 'promo/' . $file_name; // Define upload directory
        move_uploaded_file($file_tmp, $fileUpload); // Move file to server
    }

    // Insert data into the database
    $sql = "INSERT INTO promo (pin, productname, status, fileUpload) 
            VALUES ('$pin', '$productname', '$status', '$fileUpload')";

    if ($conn->query($sql) === TRUE) {
        header("Location: /ronexlife/rl_admin/productcreate.php");
               exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
