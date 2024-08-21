
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
$sql = "SELECT productname, pin FROM promo";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    // Fetch all rows into $data array
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Close connection
$conn->close();
?>






<?php
// Coordinator List
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
$sql = "SELECT fullname,branch FROM employee Where position = 'Agent' ";
$result = $conn->query($sql);

$coordinator = array();

if ($result->num_rows > 0) {
    // Fetch all rows into $data array
    while ($row = $result->fetch_assoc()) {
        $coordinator[] = $row;
    }
}

// Close connection
$conn->close();
?>






<?php
// Coordinator List
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

// Query to fetch data from employee table
$sql = "SELECT fullname, branch FROM employee WHERE position = 'Agent'";
$result = $conn->query($sql);

$coordinators = array();

if ($result->num_rows > 0) {
    // Fetch all rows into $coordinators array
    while ($row = $result->fetch_assoc()) {
        $coordinators[] = array('fullname' => $row['fullname'], 'branch' => $row['branch']);
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
    <form action="trans/member_result.php" method="POST">
        <label for="id">Member ID:</label>
        <input class="searchmember" type="text" id="id" name="id">



        <br> <!-- Add a line break -->
        <br>
        <center><button type="submit">Find</button></center>
    </form>
</div>







<br>
<br>

<div class="centered">

<form method="post" action="trans/memberverified.php">

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

</section>






<div id="overlay" class="overlay">
  <div class="modal">
    <div class="modal-content">
      <form action="process/insertmember.php" method="POST">
        <div class="modal-layer">
          <div class="form-group">
            <label for="productSelect">Select Product:</label>
            <select id="productSelect" name="product" class="form-control" onchange="updatePin()" >
              <option value="" disabled selected>Select a product</option>
              <?php
              foreach ($data as $row) {
                  echo '<option value="' . htmlspecialchars($row['productname'], ENT_QUOTES, 'UTF-8') . '" data-pin="' . htmlspecialchars($row['pin'], ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($row['productname'], ENT_QUOTES, 'UTF-8') . '</option>';
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="pin" >
          </div>


          <div class="form-group">
    <input type="text" class="form-control" name="" id="spotcash">
</div>


<div class="form-group">
    <input type="text" class="form-control" name="price" id="price">
</div>



<div class="form-group">
    <input type="text" class="form-control" name="mopdays" id="mopdays">
</div>


<div class="form-group">
    <input type="text" class="form-control" id="changestatus">
</div>

<div class="form-group">
    <label for="results">Select MOP:</label>
    <select class="form-control" id="results">
        <!-- Other options will be populated here -->
    </select>
</div>


          <div class="form-group">
            <label for="idmember">Member ID:</label>
            <input type="text" class="form-control" id="idmember" name="idmember">
          </div>

          <div class="modal-layer">
            <div class="form-group">
              <label for="firstname">Firstname: *</label>
              <input type="text" class="form-control" id="firstname" name="fname" >
            </div>
            <div class="form-group">
              <label for="middlename">Middlename: *</label>
              <input type="text" class="form-control" id="middlename" name="mname" >
            </div>
            <div class="form-group">
              <label for="lastname">Lastname: *</label>
              <input type="text" class="form-control" id="lastname" name="lname" >
            </div>
            <div class="form-group">
              <label for="subBrgy">Sub/Brgy: *</label>
              <input type="text" class="form-control" id="subBrgy" name="brgy" >
            </div>
            <div class="form-group">
              <label for="cityMun">City/Mun: *</label>
              <input type="text" class="form-control" id="cityMun" name="city" >
            </div>
            <div class="form-group">
              <label for="cityProv">City/Prov: *</label>
              <input type="text" class="form-control" id="cityProv" name="prov" >
            </div>
            <div class="form-group">
              <label for="birthdate">Birthdate: *</label>
              <input type="date" class="form-control" id="birthdate" name="bday" >
            </div>
            <div class="form-group">
              <label for="religion">Religion: *</label>
              <input type="text" class="form-control" id="religion" name="religion" >
            </div>
            <div class="form-group">
              <label for="occupation">Occupation: *</label>
              <input type="text" class="form-control" id="occupation" name="occupation" >
            </div>
            <div class="form-group">
              <label for="contactNo">Contact No: *</label>
              <input type="text" class="form-control" id="contactNo" name="contact" >
            </div>
            <div class="form-group">
              <label for="civilStatus">Civil Status: *</label>
              <input type="text" class="form-control" id="civilStatus" name="status" >
            </div>
            <div class="form-group">
              <label for="gender">Gender: *</label>
              <input type="text" class="form-control" id="gender" name="gender" >
            </div>
          </div>

          <div id="claimantsSection" class="modal-layer">
            <center>
              <h2>Claimants</h2>
            </center>

            <div class="form-group">
              <label for="claimantFirstname">Firstname: *</label>
              <input type="text" class="form-control" id="claimantFirstname" name="cfname" >
            </div>

            <div class="form-group">
              <label for="claimantLastname">Lastname: *</label>
              <input type="text" class="form-control" id="claimantLastname" name="cmname" >
            </div>
            <div class="form-group">
              <label for="claimantLastname">Lastname: *</label>
              <input type="text" class="form-control" id="claimantLastname" name="clname" >
            </div>
            <div class="form-group">
              <label for="claimantAge">Age: *</label>
              <input type="text" class="form-control" id="claimantAge" name="cage" >
            </div>
            <div class="form-group">
              <label for="claimantRelation">Relationship: *</label>
              <input type="text" class="form-control" id="claimantRelation" name="crelation" >
            </div>
            <div class="form-group">
              <label for="payerContact">Contact No: *</label>
              <input type="text" class="form-control" id="payerContact" name="pcontact" >
            </div>
          </div>


          <div id="beneficiarySection">
            <center>
              <h2>1st Beneficiary</h2>
            </center>
            <div class="form-group">
              <label for="bfname">Firstname:</label>
              <input type="text" class="form-control" id="bfname" name="bfname">
            </div>
            <div class="form-group">
              <label for="bmname">Middlename:</label>
              <input type="text" class="form-control" id="bmname" name="bmname">
            </div>
            <div class="form-group">
              <label for="blname">Lastname:</label>
              <input type="text" class="form-control" id="blname" name="blname">
            </div>
            <div class="form-group">
              <label for="bage">Age:</label>
              <input type="text" class="form-control" id="bage" name="bage">
            </div>
            <div class="form-group">
              <label for="brelation">Relationship:</label>
              <input type="text" class="form-control" id="brelation" name="brelation">
            </div>


            <center>
              <h2>2nd Beneficiary</h2>
            </center>
            <div class="form-group">
              <label for="b2fname">Firstname:</label>
              <input type="text" class="form-control" id="b2fname" name="b2fname">
            </div>
            <div class="form-group">
              <label for="b2mname">Middlename:</label>
              <input type="text" class="form-control" id="b2mname" name="b2mname">
            </div>
            <div class="form-group">
              <label for="b2lname">Lastname:</label>
              <input type="text" class="form-control" id="b2lname" name="b2lname">
            </div>
            <div class="form-group">
              <label for="b2age">Age:</label>
              <input type="text" class="form-control" id="b2age" name="b2age">
            </div>
            <div class="form-group">
              <label for="b2relation">Relationship:</label>
              <input type="text" class="form-control" id="b2relation" name="b2relation">
            </div>
          </div>


          <br><br>


          <div class="form-group">
            <label for="coordinator">Coordinator / Agent: *</label>
            <select class="form-control" id="coordinator" name="coordinator"  onchange="updateBranch()">
              <option value="" disabled selected>Select a coordinator</option>
              <?php foreach ($coordinators as $coordinator): ?>
              <option value="<?php echo htmlspecialchars($coordinator['fullname']); ?>" data-branch="<?php echo htmlspecialchars($coordinator['branch']); ?>">
                <?php echo htmlspecialchars($coordinator['fullname']); ?>
              </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="form-group">
            <label for="branchx">Branch: *</label>
            <input type="text" class="form-control" id="branchx" name="branch"  readonly>
          </div>
        </div>

        <div class="form-group">
          <label for="edate">Date Registered: *</label>
          <input type="date" class="form-control" id="edate" name="edate" >
        </div>









<input type="hidden" name="bmonth" value="">
<input type="hidden" name="byear" value="">
<input type="hidden" name="type" value="">
<input type="hidden" name="payer" value="">
<input type="hidden" name="yearmonthdate" value="">
<input type="hidden" name="yearmonth" value="">


<!-- Need to remove -->

<input type="hidden" name="modetag" value="">





        <div id="responseMessage"></div>

        <div class="btn-container">

          <button type="submit" class="btn btn-success">Submit</button>

          <button type="button" id="closeButton" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>






<script src="pyscript/fetch.js"></script>
<script src="pyscript/form-event-member.js"></script>




  





</body>
</html>
