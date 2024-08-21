<?php
if (isset($_POST['pin'])) {
    $pin = $_POST['pin'];

    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "123456";
    $dbname = "db_ronex";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT mop, status,spotcash,days,price FROM mop WHERE pin = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $pin);
    $stmt->execute();
    $result = $stmt->get_result();

    $options = array();
    while ($row = $result->fetch_assoc()) {
        $options[] = $row;
    }

    $stmt->close();
    $conn->close();

    echo json_encode($options);
}
?>
