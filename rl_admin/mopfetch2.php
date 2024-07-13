<?php
// Database credentials
$host = 'localhost';
$dbname = 'db_ronex';
$user = 'root';
$password = '123456';

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare SQL query with fixed values
    $sql = "SELECT * FROM mop WHERE id = '85'";
    $stmt = $pdo->prepare($sql);

    // Execute query
    $stmt->execute();

    // Fetch data from the database
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Return the result as JSON
    echo json_encode($result);
} catch(PDOException $e) {
    // Handle database connection error
    echo json_encode(array("error" => "Connection failed: " . $e->getMessage()));
}
?>
