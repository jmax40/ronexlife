
<?php
// Database connection parameters
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

// Query to fetch data from promo table
$sql = "SELECT productname FROM promo";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    // Fetch all rows into $data array
    while ($row = $result->fetch_assoc()) {
        $data[] = $row['productname'];
    }
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
<script src="pyscript/fetch.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Boxiocns CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-wvfXpqpZZVQGK6q3SN5GnvJFrbg3Io9gWxBjVlqMYkg7J1J7XdbnHJdT9K3bNkN" crossorigin="anonymous">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">


    </head>
<style> 


</style>

<body>



  <div class="sidebar close">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Ronex Life</span>
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
          <li><a href="member.php">Client </a></li>
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
          <li><a href="#">Create product</a></li>
          <li><a href="#">Members</a></li>
          <li><a href="#">Performance</a></li>
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
          <li><a href="#">Info</a></li>
          <li><a href="#">Performance</a></li>
          <li><a href="#">Members</a></li>
         
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

    <div class="titlehead">
       <h1>Client   Information<h1> 
</div>
    <div class="indented-line"></div>
    <br>
    <div class="inline-buttons">
  
  

    <button class="inline-button" id="addButton">Add Client<img src="../img/icons/add.ico" alt="Edit Icon" width="30" height="30"></button>
  <button class="inline-button" id="excelButton">Report<img src="../img/icons/excel.ico" alt="Edit Icon" width="30" height="30" ></i></button>
</div>


<div class="indented-line"></div>

<br>
<br>

<div>


<div>


<div class="centered">
    <label for="id">Member ID:</label>
    <input class="searchmember" type="text" id="id">
    <br> <!-- Add a line break -->
    <br>
   <center> <button type="submit">Find</button> </center>
</div>



<br>
<br>

<div class="centered">

<form method="post" action="../Admin/trans/memberverified.php">

<label for="lastname">Lastname:</label>
<input name="lname" class="searchmember" type="text" id="lastname">

<label for="firstname">Firstname:</label>
<input name="fname" class="searchmember" type="text" id="firstname">


<br><br>
<center><label for="year">Birthday:</label></center>
<br>
<label for="year">Year:</label>
<select name="byear" class="searchmember" id="year">
    <!-- Options will be added dynamically with JavaScript -->
</select>

<label for="month">Month:</label>
<select name="bmonth" class="searchmember" id="month">
    <!-- Options will be added dynamically with JavaScript -->
</select>

<label for="day">Day:</label>
<select name="bday" class="searchmember" id="day">
    <!-- Options will be added dynamically with JavaScript -->
</select>

<br> 
<br>

<center> <button type="submit">Find</button> </center>


</form>

</div>




<script>
    // Function to populate months dynamically
    function populateMonths() {
    var select = document.getElementById("month");
    var months = ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"];
    var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    for (var i = 0; i < months.length; i++) {
        var option = document.createElement("option");
        option.text = monthNames[i];
        option.value = months[i];
        select.add(option);
    }
}


    // Function to populate days dynamically based on selected month and year
    function populateDays() {
        var month = document.getElementById("month").value;
        var year = document.getElementById("year").value;
        var select = document.getElementById("day");
        select.innerHTML = '';

        // Number of days in the selected month
        var daysInMonth = new Date(year, month, 0).getDate();

        var select = document.getElementById("day");
    select.innerHTML = ""; // Clear existing options
    
    // Add leading zeros to single-digit numbers
    function padNumber(number) {
        return (number < 10 ? "0" : "") + number;
    }

    // Populate days
    for (var i = 1; i <= daysInMonth; i++) {
        var option = document.createElement("option");
        option.text = padNumber(i); // Pad with leading zeros
        option.value = padNumber(i); // Pad with leading zeros
        select.add(option);
    }

    }

    // Function to populate years dynamically
    function populateYears() {
        var select = document.getElementById("year");
        var currentYear = new Date().getFullYear();
        for (var i = currentYear; i >= 1900; i--) {
            var option = document.createElement("option");
            option.text = i;
            option.value = i;
            select.add(option);
        }
    }

    // Initial population of months, days, and years
    populateMonths();
    populateDays();
    populateYears();

    // Event listeners for month and year changes
    document.getElementById("month").addEventListener("change", populateDays);
    document.getElementById("year").addEventListener("change", populateDays);
</script>







  </section>

  <div id="overlay" class="overlay">
  <div class="modal">
    <div class="modal-content">
      <form method="post"  enctype='multipart/form-data'>
        <div class="modal-layer">
    

        <div class="form-group">
        <label for="productSelect">Select Product:</label>
        <select id="productSelect" name="productSelect" class="form-control" required>
            <?php
            foreach ($data as $productname) {
                echo '<option value="' . htmlspecialchars($productname) . '">' . htmlspecialchars($productname) . '</option>';
            }
            ?>
        </select>
    </div>
       

          <div class="form-group">
            <label for="effectDate">Effect Date: *</label>
            <input type="date" class="form-control" id="effectDate" name="effectDate" required>
          </div>
          <div class="form-group">
            <label for="coordinator">Coordinator:</label>
            <input type="text" class="form-control" id="coordinator" name="coordinator">
          </div>
        </div>

        <div class="modal-layer">
    
          <div class="form-group">
            <label for="firstname">Firstname: *</label>
            <input type="text" class="form-control" id="firstname" name="firstname" required>
          </div>
          <div class="form-group">
            <label for="middlename">Middlename: *</label>
            <input type="text" class="form-control" id="middlename" name="middlename" required>
          </div>
          <div class="form-group">
            <label for="lastname">Lastname: *</label>
            <input type="text" class="form-control" id="lastname" name="lastname" required>
          </div>
          <div class="form-group">
            <label for="subBrgy">Sub/Brgy: *</label>
            <input type="text" class="form-control" id="subBrgy" name="subBrgy" required>
          </div>
          <div class="form-group">
            <label for="cityMun">City/Mun: *</label>
            <input type="text" class="form-control" id="cityMun" name="cityMun" required>
          </div>
          <div class="form-group">
            <label for="cityProv">City/Prov: *</label>
            <input type="text" class="form-control" id="cityProv" name="cityProv" required>
          </div>
          <div class="form-group">
            <label for="birthdate">Birthdate: *</label>
            <input type="date" class="form-control" id="birthdate" name="birthdate" required>
          </div>
          <div class="form-group">
            <label for="religion">Religion: *</label>
            <input type="text" class="form-control" id="religion" name="religion" required>
          </div>
          <div class="form-group">
            <label for="occupation">Occupation: *</label>
            <input type="text" class="form-control" id="occupation" name="occupation" required>
          </div>
          <div class="form-group">
            <label for="contactNo">Contact No: *</label>
            <input type="text" class="form-control" id="contactNo" name="contactNo" required>
          </div>
          <div class="form-group">
            <label for="civilStatus">Civil Status: *</label>
            <input type="text" class="form-control" id="civilStatus" name="civilStatus" required>
          </div>
          <div class="form-group">
            <label for="gender">Gender: *</label>
            <input type="text" class="form-control" id="gender" name="gender" required>
          </div>
        </div>

        <div class="modal-layer">
          <Center><h2> Claimants </h2></Center>
          
          <div class="form-group">
            <label for="payerName">Name of Payer: *</label>
            <input type="text" class="form-control" id="payerName" name="payerName" required>
          </div>
          <div class="form-group">
            <label for="payerContact">Contact No: *</label>
            <input type="text" class="form-control" id="payerContact" name="payerContact" required>
          </div>
          <div class="form-group">
            <label for="claimantFirstname">Firstname: *</label>
            <input type="text" class="form-control" id="claimantFirstname" name="claimantFirstname" required>
          </div>
          <div class="form-group">
            <label for="claimantLastname">Lastname: *</label>
            <input type="text" class="form-control" id="claimantLastname" name="claimantLastname" required>
          </div>
          <div class="form-group">
            <label for="claimantAge">Age: *</label>
            <input type="text" class="form-control" id="claimantAge" name="claimantAge" required>
          </div>
          <div class="form-group">
            <label for="claimantRelation">Relationship: *</label>
            <input type="text" class="form-control" id="claimantRelation" name="claimantRelation" required>
          </div>


          <Center><h2> 1st Benificial </h2></Center>

          <div class="form-group">
            <label for="firstname">Firstname: *</label>
            <input type="text" class="form-control" id="firstname" name="firstname" required>
          </div>
          <!-- Additional fields -->
          <div class="form-group">
            <label for="firstname2">Firstname:</label>
            <input type="text" class="form-control" id="firstname2" name="firstname2">
          </div>
          <div class="form-group">
            <label for="lastname2">Lastname:</label>
            <input type="text" class="form-control" id="lastname2" name="lastname2">
          </div>
          <div class="form-group">
            <label for="age2">Age:</label>
            <input type="text" class="form-control" id="age2" name="age2">
          </div>
          <div class="form-group">
            <label for="relationship2">Relationship:</label>
            <input type="text" class="form-control" id="relationship2" name="relationship2">
          </div>
          <Center><h2> 2nd Benificial </h2></Center>
          <div class="form-group">
            <label for="firstname3">Firstname:</label>
            <input type="text" class="form-control" id="firstname3" name="firstname3">
          </div>
          <div class="form-group">
            <label for="lastname3">Lastname:</label>
            <input type="text" class="form-control" id="lastname3" name="lastname3">
          </div>
          <div class="form-group">
            <label for="age3">Age:</label>
            <input type="text" class="form-control" id="age3" name="age3">
          </div>
          <div class="form-group">
            <label for="relationship3">Relationship:</label>
            <input type="text" class="form-control" id="relationship3" name="relationship3">
          </div>

          <br>
          <br>

          <div class="form-group">
            <label for="claimantCoordinator">Coordinator: *</label>
            <input type="text" class="form-control" id="claimantCoordinator" name="claimantCoordinator" required>
          </div>

         
          <div class="form-group">
            <label for="branch">Branch: *</label>
            <input type="text" class="form-control" id="branch" name="branch" required>
          </div>
        </div>
        
        <div class="btn-container">
        <button type="submit" class="btn btn-success">Submit</button>
        <button type="button"  id="closeButton" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>









  





</body>
</html>
