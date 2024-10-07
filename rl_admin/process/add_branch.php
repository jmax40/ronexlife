<?php
// Database connection
$servername = "localhost";
$username = "root"; // Replace with your DB username
$password = "123456"; // Replace with your DB password
$dbname = "db_ronex";   // Replace with your DB name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form inputs
    $branch = $_POST['branch'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $zipcode = $_POST['zipcode'];
    $branchcontact = $_POST['branchcontact'];
    $email = $_POST['email'];
    $managername = $_POST['managername'];
    $managercontact = $_POST['managercontact'];

    // Handling file upload
    $fileUpload = "";
    if (isset($_FILES['fileUpload']) && $_FILES['fileUpload']['error'] == 0) {
        $file_name = $_FILES['fileUpload']['name'];
        $file_tmp = $_FILES['fileUpload']['tmp_name'];
        $fileUpload = 'uploads/' . $file_name; // Define upload directory
        move_uploaded_file($file_tmp, $fileUpload); // Move file to server
    }

    // Prepare SQL to insert data
    $sql = "INSERT INTO branch (branch, address, city, province, zipcode, branchcontact, email, managername, managercontact, fileUpload)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssss", $branch, $address, $city, $province, $zipcode, $branchcontact, $email, $managername, $managercontact, $fileUpload);

    // Execute and check success
    if ($stmt->execute()) {
       
header("Location: /ronexlife/rl_admin/branchinfo.php");
exit();

    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
