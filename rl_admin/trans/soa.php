<?php
// Collect form data
require_once '../../TCPDF-main/tcpdf.php';

// Database connection details
$host = 'localhost'; // Database host
$username = 'root'; // Database username
$password = '123456'; // Database password
$database = 'db_ronex'; // Database name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Retrieve idmember from GET request
$idmember = $_GET['pin'] ?? ''; // Use GET instead of POST

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute database query
$stmt = $conn->prepare("SELECT * FROM payment WHERE idmember = ?");
$stmt->bind_param("s", $idmember); // Assuming idmember is a string
$stmt->execute();
$result = $stmt->get_result();

// Initialize an array to hold the fetched data
$membersData = [];

// Fetch data   
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $membersData[] = [
            'ornumber' => $row['ornumber'],
            'amount' => $row['amount'], // Add amount field
            'effectdate' => date("F j, Y", strtotime($row['effectdate'])), // Format effectdate
            'duedate' => date("F j, Y", strtotime($row['duedate'])), // Format duedate
            'fullname' => $row['fullname'], // Combine names
            'price' => $row['price'], // Add price field
            'installment' => $row['installment'], // Add installment field
            'aging' => $row['aging'], // Add aging field if exists
            'balance' => $row['balance'], // Add balance field if exists
            'product' => $row['product'], // Fetch product information
        ];
    }
}

// Define the formatted date for use in the document
$formattedDate = date("F j, Y"); // Current date, or you can customize as needed

// Create HTML content
$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Medical Certification</title>
    <style>
        body {
            font-family: "Roboto Mono", monospace;
        }

        table {
            width: 100%;
            border-color: #000000;
        }
             

        th, td {
            padding: 10px;
            text-align: left;
            font-size: 12px;
            border: 1px solid #e0e0e0;
        }

        .name {
            font-size: 14px; /* Adjust the font size as needed */
            margin: 10px 0;
            font-weight: bold; /* Make it bold for emphasis */
        }
    </style>
</head>
<body>

<img src="../../img/head/head.png" alt="Description of the image" class="responsive-image">
<p class="date">Date issued: ' . $formattedDate . '</p>' ;

// Check if there is data and display the full name and product above the table
if (!empty($membersData)) {
    $fullname = htmlspecialchars($membersData[0]['fullname']); // Escape for safety
    $product = htmlspecialchars($membersData[0]['product']); // Escape for safety
    $html .= '<p class="name">Name: ' . $fullname . '</p>'; // Display the name
    $html .= '<p>Product: ' . $product . '</p>'; // Display the product
}

$html .= '<table id="receipttable">
<tr>
    <th>Date</th>
    <th>Ins. No</th>
    <th>Or Number</th>
    <th>Aging</th>
    <th>Amount</th>
</tr>';

// Initialize total amount
$totalAmount = 0;

// Display data in table rows
if (!empty($membersData)) {
    foreach ($membersData as $member) {
        $html .= "<tr>
                    <td>{$member['effectdate']}</td>
                    <td>{$member['installment']}</td>
                    <td>{$member['ornumber']}</td>
                    <td>{$member['aging']}</td>
                    <td style='text-align: right;'>{$member['amount']}</td> <!-- Align individual amounts -->
                   </tr>";

        // Accumulate total amount
        $totalAmount += $member['amount'];
    }
} else {
    $html .= "<tr><td colspan='5'>No records found.</td></tr>";
}

// Display total amount row
$html .= "<tr>
            <td style='text-align: right; font-weight: bold;'>Total:</td>
            <td colspan='3'></td>
            <td colspan='3'></td>
            <td colspan='3'></td>
            <td style='text-align: right; font-weight: bold;'>" . number_format($totalAmount, 2) . "</td>
          </tr>";

if (!empty($membersData)) {
    $balance = htmlspecialchars($membersData[0]['balance']); // Escape for safety

    // Display the name
    $html .= '<p>Remaining Balance: ' . $balance . '</p>'; // Display the balance
}

$html .= '</table>';

// Initialize TCPDF
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Set document information
$pdf->SetCreator('Parcon Hospital');
$pdf->SetAuthor('Parcon Hospital');
$pdf->SetTitle('Medical Certification');
$pdf->SetSubject('Medical Certification');
$pdf->SetKeywords('Medical, Certification');

// Set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// Set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// Set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_RIGHT);
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// Remove page border
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// Add a page
$pdf->AddPage();

// Write HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// Output the generated PDF to the browser (inline display)
$filename = !empty($membersData) ? ucwords(strtolower($membersData[0]['fullname'])) . '.pdf' : 'document.pdf';
$pdf->Output($filename, 'I');

exit;
?>
