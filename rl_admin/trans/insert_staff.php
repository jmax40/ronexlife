<?php
// Configuration
$db_host = 'localhost';
$db_username = 'root';
$db_password = '123456';
$db_name = 'db_ronex';

// Connect to the database
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the form data
$position = $_POST['position'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$staffid = $_POST['staffid'];
$fullname = $firstname . " " . $middlename . " " . $lastname;
$birthdate = $_POST['birthdate'];
$age = $_POST['age'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$mobile_no = $_POST['mobile_no'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$branch = $_POST['branch'];
$retype = $_POST['retype'];

// Validate the form data
if ($password !== $retype) {
    echo "Passwords do not match!";
    exit;
}

// Additional validations (e.g., email, mobile number, etc.)
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format!";
    exit;
}

// Hash the password
$password = password_hash($password, PASSWORD_DEFAULT);

// Insert the data into the database
$sql = "INSERT INTO employee (staffid, position, fullname, firstname, middlename, lastname, birthdate, age, address, gender, number, email, username, password, branch) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Error preparing the statement: " . $conn->error);
}

// Corrected the number of 's' in the type definition string to match the number of parameters
$stmt->bind_param("sssssssssssssss", $staffid, $position, $fullname, $firstname, $middlename, $lastname, $birthdate, $age, $address, $gender, $mobile_no, $email, $username, $password, $branch);


if ($stmt->execute()) {
    header('Location: ../staff.php');
} else {
    echo "Error creating user: " . $stmt->error;
}

// Close the statement and the database connection
$stmt->close();
$conn->close();
?>
