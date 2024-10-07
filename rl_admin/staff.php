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


</style>

<body>



  <div

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
       <h1>Staff  Information<h1> 
</div>
    <div class="indented-line"></div>
    <br>
    <div class="inline-buttons">
  
    <div class="input-container">
  <input type="text" id="searchInput" placeholder="Search">
  <img src="../img/icons/search.ico" alt="Search Icon" class="search-icon">
</div>

    <button class="inline-button" id="addButton">Add Staff <img src="../img/icons/add.ico" alt="Edit Icon" width="30" height="30"></button>
  <button class="inline-button" id="excelButton">Report<img src="../img/icons/excel.ico" alt="Edit Icon" width="30" height="30" ></i></button>
</div>


<div class="indented-line"></div>

<br>
<br>


<div class="centered">
    <form action="trans/member_result_staff.php" method="POST">
        <label for="id">Staff ID:</label>
        <input class="searchmember" type="text" id="id" name="id">



        <br> <!-- Add a line break -->
        <br>
        <center><button type="submit">Find</button></center>
    </form>
</div>







<br>
<br>

<div class="centered">

<form method="post" action="trans/memberverified_staff.php">

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
      <form method="post" action="trans/insert_staff.php" enctype='multipart/form-data' onsubmit="return validatePasswords()">
        <div class="modal-layer">
          <div class="form-group">
            <label for="gender">Position: *</label>
            <select class="form-control" id="position" name="position" required>
              <option value="other">BS</option>
              <option value="male">Agent</option>
              <option value="female">Manager</option>
              <option value="other">Area Manager</option>
              <option value="other">Administrator</option>
            </select>
          </div>

          <div class="form-group">
            <label for="firstname">Staff ID: *</label>
            <input type="text" class="form-control" id="staffid" name="staffid" required>
          </div>

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
            <label for="birthdate">Birthdate: *</label>
            <input type="date" class="form-control" id="birthdate" name="birthdate" required>
          </div>
          <div class="form-group">
            <label for="age">Age: *</label>
            <input type="number" class="form-control" id="age" name="age" required>
          </div>
          <div class="form-group">
            <label for="address">Address: *</label>
            <input type="text" class="form-control" id="address" name="address" required>
          </div>
          <div class="form-group">
            <label for="gender">Gender: *</label>
            <select class="form-control" id="gender" name="gender" required>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>
            </select>
          </div>
          <div class="form-group">
            <label for="mobile_no">Mobile No: *</label>
            <input type="text" class="form-control" id="mobile_no" name="mobile_no" required>
          </div>
          <div class="form-group">
            <label for="email">Email: *</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="username">Username: *</label>
            <input type="text" class="form-control" id="username" name="username" required>
          </div>
          <div class="form-group">
            <label for="password">Password: *</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <div class="form-group">
            <label for="retype">Re-type Password: *</label>
            <input type="password" class="form-control" id="retype" name="retype" required>
          </div>
          <div class="form-group">
            <label for="branch">Branch: *</label>
            <input type="text" class="form-control" id="branch" name="branch" required>
          </div>
        </div>
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
