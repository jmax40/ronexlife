<?php
// Database credentials
$host = 'localhost'; // Change this if your database is hosted elsewhere
$db = 'db_ronex'; // Replace with your database name
$user = 'root'; // Replace with your database username
$pass = '123456'; // Replace with your database password

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare the SQL query
    $sql = "INSERT INTO `member` (`id`, `idmember`, `product`, `price`, `edate`, `mopid`, `mopdays`, `fname`, `mname`, `lname`, `brgy`, `city`, `prov`, `bday`, `bmonth`, `byear`, `religion`, `occupation`, `contact`, `type`, `gender`, `payer`, `pcontact`, `bfname`, `bmname`, `blname`, `bage`, `brelation`, `b2fname`, `b2mname`, `b2lname`, `b2age`, `b2relation`, `cfname`, `cmname`, `clname`, `cage`, `crelation`, `coordinator`, `contractamount`, `status`, `pinmop`, `branch`, `yearmonthdate`, `yearmonth`)
            VALUES (:id, :idmember, :product, :price, :edate, :mopid, :mopdays, :fname, :mname, :lname, :brgy, :city, :prov, :bday, :bmonth, :byear, :religion, :occupation, :contact, :type, :gender, :payer, :pcontact, :bfname, :bmname, :blname, :bage, :brelation, :b2fname, :b2mname, :b2lname, :b2age, :b2relation, :cfname, :cmname, :clname, :cage, :crelation, :coordinator, :contractamount, :status, :pinmop, :branch, :yearmonthdate, :yearmonth)";

    // Prepare the statement
    $stmt = $pdo->prepare($sql);

    // Set default values
    $default_values = [
        'id' => null,
        'idmember' => 'default_member',
        'product' => 'default_product',
        'price' => 0.00,
        'edate' => date('Y-m-d'),
        'mopid' => 'Not Specified',
        'mopdays' => 'Not Specified',
        'fname' => 'Unknown',
        'mname' => '',
        'lname' => 'Unknown',
        'brgy' => 'Not Specified',
        'city' => 'Not Specified',
        'prov' => 'Not Specified',
        'bday' => 1,
        'bmonth' => 1,
        'byear' => 2000,
        'religion' => 'Not Specified',
        'occupation' => 'Not Specified',
        'contact' => '0000000000',
        'type' => 'Not Specified',
        'gender' => 'U',
        'payer' => 'Not Specified',
        'pcontact' => '0000000000',
        'bfname' => 'Not Specified',
        'bmname' => '',
        'blname' => 'Not Specified',
        'bage' => 0,
        'brelation' => 'Not Specified',
        'b2fname' => 'Not Specified',
        'b2mname' => '',
        'b2lname' => 'Not Specified',
        'b2age' => 0,
        'b2relation' => 'Not Specified',
        'cfname' => 'Not Specified',
        'cmname' => '',
        'clname' => 'Not Specified',
        'cage' => 0,
        'crelation' => 'Not Specified',
        'coordinator' => 'Not Specified',
        'contractamount' => 0.00,
        'status' => 'Active',
        'pinmop' => 'default_modetag',
        'branch' => 'default_branch',
        'yearmonthdate' => date('Y-m-d'),
        'yearmonth' => date('Y-m')
    ];

    // Bind parameters with default values or POST values if provided
    foreach ($default_values as $key => $default_value) {
        $value = isset($_POST[$key]) ? $_POST[$key] : $default_value;
        $stmt->bindValue(':' . $key, $value);
    }

    // Show the bound values before executing the query

    // Execute the query
    $stmt->execute();

    echo "Record inserted successfully.";
} catch (PDOException $e) {
    // Log the error details
    echo "Error: " . $e->getMessage();
    echo "<pre>";
    var_dump($e);
    echo "</pre>";
}
?>
