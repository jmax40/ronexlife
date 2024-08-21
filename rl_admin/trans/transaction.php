<?php
// your-script.php

// Database connection settings
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

// Get the Member ID from the GET request
$member_id = isset($_GET['pin']) ? $_GET['pin'] : '';

// Escape the member_id to prevent SQL injection
$member_id = $conn->real_escape_string($member_id);

// SQL query to find the member using prepared statements
$sql = "SELECT * FROM member WHERE idmember = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $member_id);
$stmt->execute();
$result = $stmt->get_result();

// Check if the member exists
if ($result->num_rows > 0) {
    // Fetch the member data
    $member = $result->fetch_assoc();
    $member_data = [
        'pin' => $member['idmember'],
        'fname' => $member['fname'],
        'mname' => $member['mname'],
        'lname' => $member['lname'],
        'price' => $member['price'],
        'suffix' => $member['suffix'],
    ];
} else {
    $member_data = null;
}

// Close the connection
$stmt->close();
$conn->close();

// You can then use $member_data for further processing
?>




<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="../search.css"> <!-- Correct if 'search.css' is in the same directory as your HTML file -->
    <link rel="stylesheet" href="../style2.css"> <!-- Correct if 'style2.css' is in the same directory as your HTML file -->
    <link rel="stylesheet" href="../style.css"> <!-- Moves up one directory, then into 'CSS' folder for 'style.css' -->
    <link rel="stylesheet" href="../CSS/Style.css">


    

    <!-- Boxiocns CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-wvfXpqpZZVQGK6q3SN5GnvJFrbg3Io9gWxBjVlqMYkg7J1J7XdbnHJdT9K3bNkN" crossorigin="anonymous">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

   
    </head>
<style> 




</style>

<body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../pyscript/script.js"></script>
<script src="../pyscript/fetch.js"></script>
<script src="../pyscript/add.js"></script>






  <div class="sidebar close">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name" >Ronex Life</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="dashboard.php">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name" href="dashboard.php" >Dashboard</span>
        </a>
        <ul class="sub-menu blank">
        <li><a class="link_name" href="dashboard.php">Dashboard</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Members</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Members</a></li>
          <li><a href="index.php">Client </a></li>
          <li><a href="staff.php">Officers</a></li>
          <li><a href="transaction.php">Transaction</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Products</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Products</a></li>
          <li><a href="productcreate.php">Create product</a></li>
          <li><a href="productmember.php">Members</a></li>
          <li><a href="productperformance.php">Performance</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Branch</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Branch</a></li>
          <li><a href="branchinfo.php">Info</a></li>
          <li><a href="branchperformance.php">Performance</a></li>
          <li><a href="branchmember.php">Members</a></li>
         
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="link_name">Analytics</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Analytics</a></li>
        </ul>
      </li>
  
      <li>
        <a href="#">
          <i class='bx bx-compass' ></i>
          <span class="link_name">Explore</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Explore</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-history'></i>
          <span class="link_name">History</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">History</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Setting</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Setting</a></li>
        </ul>
      </li>
      <li>
    <div class="profile-details">
      <div class="profile-content">
        <!--<img src="image/profile.jpg" alt="profileImg">-->
      </div>
      <div class="name-job">
        <div class="profile_name">Prem Shahi</div>
        <div class="job">Web Desginer</div>
      </div>
      <i class='bx bx-log-out' ></i>
    </div>
  </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Menu</span>

    
    </div>
    <center>
    <div class="image-container">
        <img src="../../img/head/head.png" alt="image">
    </div>



    <center>
 
    <div class="titlehead">
       <h1>Member Result<h1> 
</div>
<div class="indented-line"></div>
<br>
<div class="button-container">
        <button class="inline-button" id="addButton">Add Payment<img src="../../img/icons/add.ico" alt="Add Icon" width="30" height="30"></button>
        <button class="inline-button" id="excelButton">Report<img src="../../img/icons/excel.ico" alt="Excel Icon" width="30" height="30"></button>
    </div>
    <div class="indented-line"></div>
    
    <div class="inline-buttons">
  



<div class="indented-line"></div>

<br>
<br>


<br>

<table id="ptable">
    <thead>
        <tr>
        <th >Date</th>
        <th >Or Number</th>
				<th >Ins. Number</th>
				<th >Plan type </th>
        <th >Payment</th>
        <th >Next Duedate</th>
        <th >balance</th>
        <th >Delete</th>
        </tr>
    </thead>
    <tbody>
      
    </tbody>
</table>

     


  </section>

  <div id="overlay" class="overlay">
  <div class="modalv2">
    <div class="modal-content">
      <center><h1>Payment Information</h1></center>
      
      <form method="post" action="process_payment.php" enctype="multipart/form-data">
        <div class="modal-layer">
          <input type="text" class="form-control" value="<?php echo htmlspecialchars($member_data['pin']); ?>" name="idmember" required>

          <div class="form-group">
            <label for="product">OR number: *</label>
            <input type="text" class="form-control" id="pin" name="ornumber" required>
          </div>

          <div class="form-group">
            <label for="installment">Installment: *</label>
            <input type="number" class="form-control" value="1" id="installment" name="installment" required>
          </div>

          <div class="form-group">
            <label for="price">Price: *</label>
            <input type="text" class="form-control" value="<?php echo htmlspecialchars($member_data['price']); ?>" id="price" name="price" required readonly>
          </div>
        </div>
        
        <br><br>
        <div class="btn-container">
          <button type="submit" class="btn btn-success" id="checkout">Pay Now</button>
          <button type="button" id="closeButton" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>




    </div>
  </div>
</div>





<script>
    document.getElementById('installment').addEventListener('input', function() {
        var installmentInput = document.getElementById('installment');
        var installment = parseFloat(installmentInput.value) || 0;

        // Prevent negative values
        if (installment < 0) {
            installment = 0;
            installmentInput.value = installment; // Set the value back to zero
        }

        var originalPrice = <?php echo htmlspecialchars($member_data['price']); ?>;
        var total = installment * originalPrice;
        
        document.getElementById('price').value = total.toFixed(2); // Display result with two decimal places
    });

    // Trigger input event on page load to set the initial price based on default installment value
    document.getElementById('installment').dispatchEvent(new Event('input'));
</script>



</body>
</html>
