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
      <span class="logo_name">Ronex life</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="dashboard.php">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name" href="dashboard.php">Dashboard</span>
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
       <h1>Branch  Information<h1> 
</div>
    <div class="indented-line"></div>
    <br>
    <div class="inline-buttons">
  
    <div class="input-container">
  <input type="text" id="searchInput" placeholder="Search">
  <img src="../img/icons/search.ico" alt="Search Icon" class="search-icon">
</div>

    <button class="inline-button" id="addButton">Add Branch<img src="../img/icons/building.ico" alt="Edit Icon" width="30" height="30"></button>
  
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
            <th></th>
            <th></th>
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
            <label for="branch">Business Name: *</label>
            <input type="text" class="form-control" id="branch" name="branch" required>
          </div>
          <div class="form-group">
            <label for="subBrgy">Street Address: *</label>
            <input type="text" class="form-control" id="subBrgy" name="subBrgy" required>
          </div>
          <div class="form-group">
            <label for="cityMun">City: *</label>
            <input type="text" class="form-control" id="cityMun" name="cityMun" required>
          </div>
          <div class="form-group">
            <label for="cityProv">State/Province: *</label>
            <input type="text" class="form-control" id="cityProv" name="cityProv" required>
          </div>
          <div class="form-group">
            <label for="zipCode">Postal/ZIP Code: *</label>
            <input type="text" class="form-control" id="zipCode" name="zipCode" required>
          </div>
          <div class="form-group">
            <label for="country">Country: *</label>
            <input type="text" class="form-control" id="country" name="country" required>
          </div>
        </div>

        <div class="modal-layer">
          <div class="form-group">
            <label for="contactNo">Contact Information (Phone): *</label>
            <input type="text" class="form-control" id="contactNo" name="contactNo" required>
          </div>
          <div class="form-group">
            <label for="email">Contact Information (Email): *</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="businessHours">Business Hours: *</label>
            <input type="text" class="form-control" id="businessHours" name="businessHours" required>
          </div>
          <div class="form-group">
            <label for="managerName">Branch Manager Name: *</label>
            <input type="text" class="form-control" id="managerName" name="managerName" required>
          </div>
          <div class="form-group">
            <label for="managerContact">Branch Manager Contact: *</label>
            <input type="text" class="form-control" id="managerContact" name="managerContact" required>
          </div>
        </div>

        <div class="modal-layer">
          <div class="form-group">
            <label for="servicesOffered">Services Offered: *</label>
            <textarea class="form-control" id="servicesOffered" name="servicesOffered" rows="4" required></textarea>
          </div>
          <div class="form-group">
            <label for="additionalNotes">Additional Notes/Comments:</label>
            <textarea class="form-control" id="additionalNotes" name="additionalNotes" rows="4"></textarea>
          </div>
          <div class="form-group">
            <label for="fileUpload">Uploads (Documents/Images):</label>
            <input type="file" id="fileUpload" name="fileUpload" accept="image/*, .pdf, .doc, .docx">
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
