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
  <div class="sidebar close">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">CodingLab</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="dashboard.php">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name" href="dashboard.php">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Members</a></li>
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
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <!-- Replace the content below with your actual data -->
        <tr>
            <td>123</td>
            <td>John Doe</td>
            <td>123 Main St</td>
            <td>Credit Card</td>
            <td>2024-01-27</td>
            <td>Active</td>
            <td>Agent Smith</td>
            <td><button id="tableicon"><img src="../img/icons/edit.ico" alt="Edit Icon" width="25" height="25" ></button></td>
            <td><button id="tableicon"><img src="../img/icons/delete.ico" alt="Delete Icon" width="25" height="25" ></button></td>
        </tr>
        <!-- Add more rows as needed -->
    </tbody>
</table>
  </section>
  <div id="overlay" class="overlay">
  <div class="modal">
    <div class="modal-content">
      <form method="post" action="Maharlika.php" enctype='multipart/form-data'>
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
            <label for="firstname">Firstname: *</label>
            <input type="text" class="form-control" id="firstname" name="firstname" required>
          </div>
          <div class="form-group">
            <label for="firstname">Middlename: *</label>
            <input type="text" class="form-control" id="firstname" name="firstname" required>
          </div>
          <div class="form-group">
            <label for="firstname">Lastname: *</label>
            <input type="text" class="form-control" id="firstname" name="firstname" required>
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
            <label for="age">Mobile No: *</label>
            <input type="text" class="form-control" id="age" name="age" required>
          </div>
          <div class="form-group">
            <label for="address">Email: *</label>
            <input type="email" class="form-control" id="address" name="address" required>
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










  





</body>
</html>
