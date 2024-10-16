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


// Retrieve and sanitize POST data
$lname = isset($_POST['lname']) ? trim($_POST['lname']) : '';
$fname = isset($_POST['fname']) ? trim($_POST['fname']) : '';
$byear = isset($_POST['byear']) ? trim($_POST['byear']) : '';
$bmonth = isset($_POST['bmonth']) ? trim($_POST['bmonth']) : '';
$bday = isset($_POST['bday']) ? trim($_POST['bday']) : '';

// Ensure month and day are in two-digit format
$bmonth = str_pad($bmonth, 2, '0', STR_PAD_LEFT);
$bday = str_pad($bday, 2, '0', STR_PAD_LEFT);

// Concatenate the birthday
$birthday = $byear . "-" . $bmonth . "-" . $bday;

// Escape the inputs to prevent SQL injection
$lname = $conn->real_escape_string($lname);
$fname = $conn->real_escape_string($fname);
$birthday = $conn->real_escape_string($birthday);

// SQL query to find the member
$sql = "SELECT * FROM employee WHERE lastname = '$lname' AND firstname = '$fname' AND birthdate = '$birthday'";
$result = $conn->query($sql);

// Check if the member exists
if ($result->num_rows > 0) {
    // Fetch the member data
    $member = $result->fetch_assoc();
    $member_data = [
        'pin' => $member['staffid'],
        'fname' => $member['firstname'],
        'mname' => $member['middlename'],
        'lname' => $member['lastname'],
        'suffix' => $member['suffix'],
    ];
} else {
    $member_data = null;
}

// Close the connection
$conn->close();
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
    <i> <img src="../../img/icons/leaf.ico" alt="Map Icon" style="width: 40px; height: 40px;">  </i>
      <span class="logo_name" >Ronex Life</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="dashboard.php">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name" href="../index.php" >Dashboard</span>
        </a>
        <ul class="sub-menu blank">
        <li><a class="link_name" href="../index.php">Dashboard</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
          <i class='bx bx-group'></i>
            <span class="link_name">Members</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Members</a></li>
          <li><a href="../member.php">Client </a></li>
          <li><a href="../staff.php">Officers</a></li>
          <li><a href="../transaction.php">Transaction</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
          <i class='bx bx-package'></i>
            <span class="link_name">Products</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Products</a></li>
          <li><a href="../productcreate.php">Create product</a></li>
          <li><a href="../productmember.php">Members</a></li>
          <li><a href="../productperformance.php">Performance</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
          <i class='bx bx-building'></i>
            <span class="link_name">Branch</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Branch</a></li>
          <li><a href="../branchinfo.php">Info</a></li>
          <li><a href="../branchmember.php">Members</a></li>
          <li><a href="../branchperformance.php">Performance</a></li>
         
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
    
    <div class="titlehead">
       <h1>Agent Information<h1> 
</div>
    <div class="indented-line"></div>

    <br>
    <div class="inline-buttons">
  



<div class="indented-line"></div>

<br>
<br>

<table id="ptable">
    <thead>
        <tr>
            <th>Staff ID:</th>
            <th>First Name:</th>
            <th>Middle Name:</th>
            <th>Last Name:</th>
            <th>Suffix:</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($member_data): ?>
            <tr>
                <!-- Make Product Pin clickable -->
                <td>
                <a href="transaction_staff.php?pin=<?php echo urlencode($member_data['fname'] . ' ' . $member_data['mname'] . ' ' . $member_data['lname']); ?>">
                  <?php echo htmlspecialchars($member_data['pin']); ?>
</a>         
                </td>
                <td><?php echo htmlspecialchars($member_data['fname']); ?></td>
                <td><?php echo htmlspecialchars($member_data['mname']); ?></td>
                <td><?php echo htmlspecialchars($member_data['lname']); ?></td>
                <td><?php echo htmlspecialchars($member_data['suffix']); ?></td>
                <tr>
            <td colspan="5">
        <center><button class="btn btn-success" onclick="window.history.back();">GO BACK</button><center>
    </td>
        </tr>
            </tr>
        <?php else: ?>
            <tr>
                <td colspan="5">No member found with the given ID.</td>
            </tr>
            <tr>
    <td colspan="5">
        <center><button class="btn btn-secondary" onclick="window.history.back();">GO BACK</button><center>
    </td>
</tr>
        <?php endif; ?>
    </tbody>
</table>

     

  </section>

  <div id="overlay" class="overlay">
  <div class="modalv2">
    <div class="modal-content">
    <center> <h1>Product Information <h1>  </center>
    
    <form method="post" enctype='multipart/form-data'>
    <div class="modal-layer">
        <div class="form-group">
            <label for="product">Product ID: *</label>
            <input type="text" class="form-control" id="pin" name="pin" required>
        </div>
        <div class="form-group">
            <label for="effectDate">Product Name: *</label>
            <input type="text" class="form-control" id="productname" name="productname" required>
        </div>
        <div class="form-group">
            <label for="coordinator">Status:</label>
            <select class="form-control" id="status" name="status">
                <option value="promo">Promo</option>
                <option value="primary">Primary</option>
            </select>
        </div>
    </div>
    <br><br>
    <div class="btn-container">
        <button type="button" class="btn btn-success" id="checkout" onclick="saveproduct()">Create</button>
        <button type="button" id="closeButton" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    </div>
</form>




    </div>
  </div>
</div>



</body>
</html>
