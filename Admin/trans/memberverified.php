

<?php
// Check if the form is submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialize an empty array to store the data
    $data = array();

    // Retrieve values from POST parameters
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $bday = $_POST['bday'];
    $bmonth = $_POST['bmonth'];
    $byear = $_POST['byear'];

    // Check if required fields are empty
    if (empty($fname) || empty($lname) || empty($bday) || empty($bmonth) || empty($byear)) {
        // If any required field is empty, redirect back to member.php with a message
        header("Location: ../member.php?message=No%20matching%20records%20found");
        exit(); // Ensure that subsequent code is not executed after redirection
    }

    // Connect to your database (replace dbname, username, password with your actual credentials)
    $conn = new mysqli("localhost", "root", "123456", "db_ronex");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Construct the SQL query based on the submitted form data
    $sql = "SELECT * FROM member WHERE ";
    $conditions = array();

    // Add conditions based on the submitted form data
    if (!empty($fname)) {
        $conditions[] = "fname = '$fname'";
    }
    if (!empty($lname)) {
        $conditions[] = "lname = '$lname'";
    }
    if (!empty($bday)) {
        $conditions[] = "bday = '$bday'";
    }
    if (!empty($bmonth)) {
        $conditions[] = "bmonth = '$bmonth'";
    }
    if (!empty($byear)) {
        $conditions[] = "byear = '$byear'";
    }

    // Combine conditions with AND operator
    if (!empty($conditions)) {
        $sql .= implode(" AND ", $conditions);
    } else {
        // If no conditions are specified, select all records
        $sql .= "1"; // This condition always evaluates to true
        header("Location: ../member.php?message=No%20matching%20records%20found");
    }

    // Debugging: Print out the SQL query


    // Execute the query
    $result = $conn->query($sql);

    // Check for errors
    if (!$result) {
        // If there's an error, display the error message
        echo "Error: " . $conn->error;
        // You can log the error or handle it as needed
    }

    // Check if any rows are returned
    if ($result->num_rows > 0) {
        // Loop through each row and store data in $data array
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        
      
    } else {
        // If no matching records found, redirect back to member.php with a message
        header("Location: ../member.php?message=No%20matching%20records%20found");
        exit(); // Ensure that subsequent code is not executed after redirection
    }

    // Close the database connection
    $conn->close();
} else {
    // If the form is not submitted via POST, redirect back to member.php with a "No data found" message
    header("Location: ../member.php?message=No%20matching%20records%20found");
    exit(); // Ensure that subsequent code is not executed after redirection
}
?>





<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
<link rel="stylesheet" href="../search.css">
<link rel="stylesheet" href="../style2.css">
<link rel="stylesheet" href="../style.css">



<script src="script.js"></script>

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


  



</div>


<div class="indented-line"></div>

<br>
<br>




<div class="enteredverified">
    <table>
        <thead>
            <tr>
                <th>CN</th>
                <th>Name</th>
                <th>Address</th>
                <th>MOP</th>
                <th>Effective Date</th>
                <th>Status</th>
                <th>Agent</th>
            </tr>
        </thead>
        <tbody>
    <?php foreach ($data as $row): ?>
        <tr>
            <!-- Display specific columns -->
            <td><?php echo $row['idmember']; ?></td> <!-- Displaying the 'idmember' column -->
            <td><?php echo $row['fname'] . ' ' . $row['mname'] . ' ' . $row['lname']; ?></td> <!-- Concatenating 'fname', 'mname', and 'lname' columns -->
            <td><?php echo $row['brgy'] . ' ' . $row['city'] . ' ' . $row['prov']; ?></td>
            <td><?php echo $row['mop']; ?></td> 
            <td><?php echo $row['edate']; ?></td>
            <td><?php echo $row['status']; ?></td>  
            <td><?php echo $row['coordinator']; ?></td> 
        </tr>
    <?php endforeach; ?>
</tbody>


    </table>
</div>


<br>
<br>








  </section>

  <div id="overlay" class="overlay">
  <div class="modal">
    <div class="modal-content">
      <form method="post" action="Maharlika.php" enctype='multipart/form-data'>
        <div class="modal-layer">
    
          <div class="form-group">
            <label for="product">Product: *</label>
            <input type="text"   class="form-control" id="product" name="product" required>
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
