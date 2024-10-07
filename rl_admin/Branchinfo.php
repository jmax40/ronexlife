
<?php
// Database connection
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

// SQL query to select from table
$sql = "SELECT * FROM branch";
$result = $conn->query($sql);

// Close connection if no records found
if ($result->num_rows > 0) {
    // Fetch all records and store them in an array
    $records = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $records = [];
}

// Close connection
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


<script src="script.js"></script>

    <!-- Boxiocns CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-wvfXpqpZZVQGK6q3SN5GnvJFrbg3Io9gWxBjVlqMYkg7J1J7XdbnHJdT9K3bNkN" crossorigin="anonymous">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

   
    </head>
    <style>
        button {
            padding: 150px 200px;
            font-size: 16px;
            cursor: pointer;
            position: relative;
            display: inline-block;
            color: #fff;
        }

      
    .icon {
      position: absolute;
      right: 40px;
      bottom: 40px;
      font-size: 30px; /* increase the font size */
      color: #555;
      width: 100px; /* set width to 50px */
      height: 100px; /* set height to 50px */
    }

       button:hover  {
        opacity: 0.8;
  border: 2px solid #00FFFF;
  border-radius: 5px;
  box-shadow: 0 0 10px #00FFFF;  /* add a glowing effect */
       }


    </style>
<body>



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






  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Menu</span>

    
    </div>

    <div class="titlehead">
       <h1>Branch  Information<h1> 
</div>
    <div class="indented-line"></div>
    <br>
    <div class="inline-buttons">
  
    <div class="input-container">

</div>

    <button class="inline-button" id="addButton">Add Branch<img src="../img/icons/building.ico" alt="Edit Icon" width="30" height="30"></button>
  
</div>


<div class="indented-line"></div>

<br>
<br>
<center>
<?php if (count($records) > 0): ?>
    <?php $colorIndex = 0; ?>
    <?php foreach ($records as $record): ?>
        <!-- Applying the image background to each button and ensuring it fits properly -->
        <button style="background-image: url('process/<?= htmlspecialchars($record['fileUpload']);?>'); 
                        background-size: cover; 
                        background-position: center; 
                        background-repeat: no-repeat;">

            <div id="colorbackground" style="background-color: rgba(0, 0, 0, 0.5); 
                                         padding: 20px;">
                Branch Name: <?= $record['id'] . " - " . $record['branch']; ?><br>
                Address:<br>
                Manager:<br>
                Agent:<br>
                Member:<br>
                
                <img src="process/<?= htmlspecialchars($record['fileUpload']);?>" alt="Edit Icon" class="icon">
            </div>

        </button>

        <?php $colorIndex++; ?>
    <?php endforeach; ?>
<?php else: ?>
    <p>No records found.</p>
<?php endif; ?>
</center>








  </section>

  <div id="overlay" class="overlay">
  <div class="modal">
    <div class="modal-content">
      <form method="post" action="process/add_branch.php" enctype='multipart/form-data'>
        <div class="modal-layer">
          <div class="form-group">
            <label for="branch">Branch Name: *</label>
            <input type="text" class="form-control" id="branch" name="branch" required>
          </div>
          <div class="form-group">
            <label for="address">Street Address: *</label>
            <input type="text" class="form-control" id="address" name="address" required>
          </div>
          <div class="form-group">
            <label for="city">City: *</label>
            <input type="text" class="form-control" id="city" name="city" required>
          </div>
          <div class="form-group">
            <label for="province">State/Province: *</label>
            <input type="text" class="form-control" id="province" name="province" required>
          </div>
          <div class="form-group">
            <label for="zipcode">Postal/ZIP Code: *</label>
            <input type="text" class="form-control" id="zipcode" name="zipcode" required>
          </div>
        </div>
        <div class="modal-layer">
          <div class="form-group">
            <label for="bracnhcontact">Contact Information (Phone): *</label>
            <input type="text" class="form-control" id="bracnhcontact" name="branchcontact" required>
          </div>
          <div class="form-group">
            <label for="email">Contact Information (Email): *</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="managername">Branch Manager Name: *</label>
            <input type="text" class="form-control" id="managername" name="managername" required>
          </div>
          <div class="form-group">
            <label for="managercontact">Branch Manager Contact: *</label>
            <input type="text" class="form-control" id="managercontact" name="managercontact" required>
          </div>
        </div>
        <div class="form-group">
          <label for="fileUpload">Uploads (Documents/Images):</label>
          <input type="file" id="fileUpload" name="fileUpload" accept="image/*, .pdf, .doc, .docx, .jpeg, .jpg, .png, .gif, .bmp, .webp, .tiff, .svg">
        </div>
        <div class="btn-container">
          <button type="submit" class="btn btn-success">Submit</button>
          <button type="button" id="closeButton" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>








  





</body>
</html>
