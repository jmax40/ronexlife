




<?php
include_once '../process/foreach_transaction_staff.php';

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
      <span class="logo_name" >Ronex Life</span>
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
          <li><a href="index.php">Client </a></li>
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
       <h1>Payment History<h1> 
</div>
<div class="indented-line"></div>
<br>
<div class="button-container">

        <button class="inline-button" id="excelButton">Report<img src="../../img/icons/excel.ico" alt="Excel Icon" width="30" height="30"></button>
    </div>
    <div class="indented-line"></div>
    
    <div class="inline-buttons">
  

 


<div class="indented-line"></div>

<br>
<br>


<br>








<table id="ttable">
        <thead>
            <tr>
                <th>Effective Date</th>
                <th>Next Payment</th>
                <th>Or Number</th>
                <th>Ins. Number</th>
                <th>Product</th>
                <th>Payment</th>
                <th>Aging</th>
                <th>Comm</th>
                <th>Ncomm</th>
                <th>Balance</th>
                <th>Delete</th>
                <th>Receipt</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($transactions): ?>
                <?php foreach ($transactions as $transaction): ?>
                    <tr>

                        <td><?php echo htmlspecialchars($transaction['effectdate']); ?></td>
                        <td><?php echo htmlspecialchars($transaction['duedate']); ?></td>
                        <td><?php echo htmlspecialchars($transaction['ornumber']); ?></td>
                        <td><?php echo htmlspecialchars($transaction['installment']); ?></td>
                        <td><?php echo htmlspecialchars($transaction['product']); ?></td>
                        <td><?php echo htmlspecialchars($transaction['amount']); ?></td>
                        <td><?php echo htmlspecialchars($transaction['aging']); ?></td>
                        <td><?php echo htmlspecialchars($transaction['comm']); ?></td>
                        <td><?php echo htmlspecialchars($transaction['ncomm']); ?></td>
                        <td><?php echo htmlspecialchars($transaction['balance']); ?></td>
                        <td>
                        <a href="delete_transaction.php?id=<?php echo htmlspecialchars($transaction['id']); ?>&idmember=<?php echo htmlspecialchars($transaction['idmember']); ?>&amount=<?php echo htmlspecialchars($transaction['amount']); ?>" class="delete-link" onclick="return confirm('Are you sure you want to delete this transaction?');">
                         <img src="../../img/icons/delete.ico" alt="Delete Icon" width="30" height="30">
</a>
</a>
</a>

                       </td>


<td>
<a> <img src="../../img/icons/receipt.ico" alt="Delete Icon" width="30" height="30"> </a>

</td>




                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="8" > No transactions found for this member.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
      

    

 
   





  </section>










    </div>
  </div>
</div>




<script>
        document.addEventListener('DOMContentLoaded', function() {
            const installmentInput = document.getElementById('installment');
            const effectDateInput = document.getElementById('nextduedate');

            let initialDate = new Date(effectDateInput.value); // Store initial date

            function updateEffectDate() {
                const installment = parseInt(installmentInput.value, 10);
                
                if (!isNaN(installment)) {
                    // Calculate new date based on installment value
                    const daysToAdd = 30 * installment;
                    let newDate = new Date(initialDate);
                    newDate.setDate(newDate.getDate() + daysToAdd);
                    
                    // Update effect date input
                    effectDateInput.value = newDate.toISOString().split('T')[0];
                }
            }

            installmentInput.addEventListener('input', updateEffectDate);

            // Initial setup to set date when page loads
            updateEffectDate();
        });
    </script>




<script>
    document.getElementById('installment').addEventListener('input', function() {
        var installmentInput = document.getElementById('installment');
        var installment = parseFloat(installmentInput.value) || 0;

        // Prevent negative values
        if (installment < 0) {
            installment = 0;
            installmentInput.value = installment; // Set the value back to zero
        }

        var originalPrice = <?php echo htmlspecialchars($member_data['price']); ?>;
        var total = installment * originalPrice;
        
        document.getElementById('price').value = total.toFixed(2); // Display result with two decimal places
    });

    // Trigger input event on page load to set the initial price based on default installment value
    document.getElementById('installment').dispatchEvent(new Event('input'));
</script>





<script src="../pyscript/fetch.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../pyscript/script.js"></script>
<script src="../pyscript/add.js"></script>

</body>
</html>
