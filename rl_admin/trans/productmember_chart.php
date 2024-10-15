




<?php
include_once '../process/foreach_transaction_member_chart.php';

// Your code here...
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    

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
    <center>
    <div class="image-container">
        <img src="../../img/head/head.png" alt="image">
    </div>



    <center>
        



    <div class="date-time">
        <p>DATE: <span id="date"><?php echo htmlspecialchars($day); ?> - <?php echo htmlspecialchars($month); ?> - <?php echo htmlspecialchars($year); ?></span></p>
        <p>TIME: <span id="time"><?php echo htmlspecialchars($time); ?></span></p>
        
    </div>


    <script>
        function updateTime() {
            const now = new Date();
            const day = now.getDate().toString().padStart(2, '0');
            const month = (now.getMonth() + 1).toString().padStart(2, '0');  // Months are 0-based
            const year = now.getFullYear();

            // 12-hour format with AM/PM
            let hours = now.getHours();
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const seconds = now.getSeconds().toString().padStart(2, '0');
            const ampm = hours >= 12 ? 'PM' : 'AM';
            hours = hours % 12;  // Convert to 12-hour format
            hours = hours ? hours : 12;  // The hour '0' should be '12'
            hours = hours.toString().padStart(2, '0');

            document.getElementById('date').textContent = `${day} - ${month} - ${year}`;
            document.getElementById('time').textContent = `${hours}:${minutes}:${seconds} ${ampm}`;
        }

        // Update the time every second
        setInterval(updateTime, 1000);

        // Initial call to display time immediately
        updateTime();
    </script>







 
    <div class="titlehead">

    <h1>Member Information<h1> 
</div>
    <div class="indented-line"></div>
    <br>
    <div class="inline-buttons">
  
    <div class="input-container">
  <input type="text" id="searchInput" placeholder="Search">
  <img src="../../img/icons/search.ico" alt="Search Icon" class="search-icon">
</div>

  <button class="inline-button" id="excelButton">Report<img src="../../img/icons/excel.ico" alt="Edit Icon" width="30" height="30" ></i></button>
  <button class="inline-button" >Chart <img src="../../img/icons/chart.ico" alt="Edit Icon" width="30" height="30"></button>
</div>


<div class="indented-line"></div>

<br>
<br>






<div style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
    <select id="pageSelect" style="margin-left: 5%; min-width: 50px; max-width: 150px;"></select>
</div>
 


<table id="ttable">
    <thead>
        <tr>
            <th>Product</th>
            <th>ID</th>
            <th>Firstname</th>
            <th>Middlename</th>
            <th>Lastname</th>
            <th>Coordinator</th>
            <th>Branch</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($transactions)): ?>
            <?php foreach ($transactions as $transaction): ?>
                <tr>
                  
                    <td><?php echo htmlspecialchars($transaction['product']); ?></td>
                    <td><?php echo htmlspecialchars($transaction['idmember']); ?></td>
                    <td><?php echo htmlspecialchars($transaction['fname']); ?></td>
                    <td><?php echo htmlspecialchars($transaction['mname']); ?></td>
                    <td><?php echo htmlspecialchars($transaction['lname']); ?></td>
                    <td><?php echo htmlspecialchars($transaction['coordinator']); ?></td>
                    <td><?php echo htmlspecialchars($transaction['branch']); ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">No transactions found for this member.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>





<div style="display: flex; justify-content: center; align-items: center;">
<button id="prevButton" disabled style="margin-right: 10px; border: none; border-radius: 50%; width: 40px; height: 40px; background-color: gray; color: white;">
            <i class="fas fa-arrow-left"></i>
        </button>
        <button id="nextButton" style="border: none; border-radius: 50%; width: 40px; height: 40px; background-color: gray; color: white;">
            <i class="fas fa-arrow-right"></i>
        </button>
    </div>

  

  </section>





  




    </div>
  </div>
</div>








<script src="../pyscript/fetch.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../pyscript/script.js"></script>
<script src="../pyscript/add.js"></script>
<script src="../pyscript/table_script.js"></script>


</body>
</html>
