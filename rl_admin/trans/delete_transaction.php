<?php

$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "db_ronex";

// Get the transaction ID and member ID from the query string
$id = $_GET['id'];
$idmember = $_GET['idmember'];
$return = $_GET['amount'];

// Your code to delete the transaction from the database
$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// SQL query with both `id` and `idmember`
$sql = "DELETE FROM payment WHERE id = ? AND idmember = ?";
$stmt = $connection->prepare($sql);


// Prepare and execute the statement to update the balance
$sql2 = "UPDATE payment SET balance = balance + ? WHERE idmember = ?";
$stmt2 = $connection->prepare($sql2);


$stmt2->bind_param("is", $return, $idmember);

$stmt->bind_param("is", $id, $idmember);

if ($stmt->execute()) {
    header("Location: http://localhost/ronexlife/rl_admin/trans/transaction.php?pin=" . urlencode($idmember));
} else {
    echo "Error deleting transaction: " . $connection->error;
}

$stmt->close();
$connection->close();

?>

