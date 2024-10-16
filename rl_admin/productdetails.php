
<?php
// Establish database connection
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

// Get the 'pin' parameter from the URL
$pin = isset($_GET['pin']) ? $_GET['pin'] : '';

// Fetch data from the database based on the 'pin' parameter
$sql = "SELECT startid, mop, price, days,commission,moc,status FROM mop WHERE pin = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $pin); // Bind the 'pin' parameter to the SQL query
$stmt->execute();
$result = $stmt->get_result();

$data = array();
if ($result->num_rows > 0) {
    // Loop through each row and store in $data array
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Close database connection
$conn->close();
?>


















<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="search.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style.css">



    

    <!-- Boxiocns CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-wvfXpqpZZVQGK6q3SN5GnvJFrbg3Io9gWxBjVlqMYkg7J1J7XdbnHJdT9K3bNkN" crossorigin="anonymous">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

   
    </head>
<style> 


</style>

<body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="pyscript/script.js"></script>
<script src="pyscript/add.js"></script>





<div class="sidebar close">
    <div class="logo-details">
 <i> <img src="../img/icons/leaf.ico" alt="Map Icon" style="width: 40px; height: 40px;">  </i>
      <span class="logo_name" >Ronex Life</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="dashboard.php">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name" href="index.php" >Dashboard</span>
        </a>
        <ul class="sub-menu blank">
        <li><a class="link_name" href="index.php">Dashboard</a></li>
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
          <li><a href="member.php">Client </a></li>
          <li><a href="staff.php">Officers</a></li>
          <li><a href="transaction.php">Transaction</a></li>
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
          <li><a href="productcreate.php">Create product</a></li>
          <li><a href="productmember.php">Members</a></li>
          <li><a href="productperformance.php">Performance</a></li>
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
          <li><a href="branchinfo.php">Info</a></li>
          <li><a href="branchmember.php">Members</a></li>
          <li><a href="branchperformance.php">Performance</a></li>
         
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







  
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Menu</span>

    
    </div>

    <br>
    <div class="titlehead">
       <h1>Create Mode of Payment<h1> 
</div>
    <div class="indented-line"></div>
    <br>
    <div class="inline-buttons">
  
    <div class="input-container">

</div>

    <button class="inline-button" id="addButton">Add MOP<img src="../img/icons/add.ico" alt="Edit Icon" width="30" height="30"></button>
  <button class="inline-button" id="excelButton">Report<img src="../img/icons/excel.ico" alt="Edit Icon" width="30" height="30" ></i></button>
</div>


<div class="indented-line"></div>







<div id="overlay" class="overlay">
  <div class="modalv2">
    <div class="modal-content">
      <center><h1>Product Information</h1></center>
      
      
      <!-- Updated form to submit to insert_promo.php -->
      <form method="post" enctype="multipart/form-data" action="process/add.php">
        <div class="modal-layer">


        
    
        <input type="hidden" value="<?php echo htmlspecialchars($pin); ?>" name="pin" class="form-control" id="pin">

        
        <div class="form-group">
        <label for="mop">Name of MOP: *</label>
        <input type="text" class="form-control" id="mop" name="mop" required>
    </div>

    <div class="form-group">
        <label for="startid">Increment ID: *</label>
        <input type="text" class="form-control" id="startid" name="startid" required>
    </div>

    <div class="form-group">
        <label for="price">Price of Mop: *</label>
        <input type="text" class="form-control" id="price" name="price" required>
    </div>

    <div class="form-group">
        <label for="days">MOP Days: *</label>
        <input type="number" class="form-control" id="days" name="days" required>
    </div>

    <div class="form-group">
        <label for="spotcash">Spot Cash: *</label>
        <input type="number" class="form-control" id="spotcash" name="spotcash" required>
    </div>

    <div class="form-group">
        <label for="commission">Agent Commission Amount: *</label>
        <input type="number" class="form-control" id="commission" name="commission" placeholder="Commission of Sales Agent" required>
    </div>

    <div class="form-group">
        <label for="moc">No. Of Effective Installment Commission: *</label>
        <input type="number" class="form-control" id="moc" name="moc" placeholder="Limit No. of Installment Commission" required>
    </div>

    <div class="form-group">
        <label for="status">Status:</label>
        <select class="form-control" id="status" name="status">
            <option value="BENEFICIARY">Beneficiary</option>
            <option value="CLAIMANTS">Claimants</option>
        </select>
    </div>

    <div class="btn-container">
        <button type="submit" class="btn btn-success">Create</button>
        <button type="button" id="closeButton" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    </div>
        </div>

  
        
      </form>
    </div>
  </div>
</div>









<br>
<br>
<center><h4>Product Pin Details of :  <?php echo htmlspecialchars($pin); ?></h4></center>
<?php if (!empty($data)): ?>
        <table border="1">
            <tr>
                <th>Start ID</th>
                <th>MOP</th>
                <th>Price</th>  
                <th>Days</th>
                <th>Commission</th>
                <th>Limit Month Commission</th>
                <th>Status</th>
            </tr>
            <?php foreach ($data as $row): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['startid']); ?></td>
                <td><?php echo htmlspecialchars($row['mop']); ?></td>
                <td><?php echo htmlspecialchars($row['price']); ?></td>
                <td><?php echo htmlspecialchars($row['days']); ?></td>
                <td><?php echo htmlspecialchars($row['commission']); ?></td>
                <td><?php echo htmlspecialchars($row['moc']); ?></td>
                <td><?php echo htmlspecialchars($row['status']); ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>No details found for Pin: <?php echo htmlspecialchars($pin); ?></p>
    <?php endif; ?>
  </section>





</body>
</html>
