




<?php
include_once '../process/foreach_transaction_branchperformance_chart.php';

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



 <!-- Include jQuery -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Include Raphael.js (Morris.js dependency) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.3.0/raphael.min.js"></script>

<!-- Include Morris.js -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>



   
    </head>
<style> 




.container {
            display: flex;  /* Flexbox layout to align divs inline */
            justify-content: space-between; /* Optional: space between the two divs */
            border: 1px solid black;
            padding: 10px;
            margin: 30px;
        }


        .table-container {
            display: flex;  /* Flexbox layout to align divs inline */
            justify-content: space-between; /* Optional: space between the two divs */
            border: 1px solid black;
            padding: 5px;
            margin: 5px;
        }

        .inline-div {
            flex: 1; /* Make both divs take up equal space */
            border: 1px solid blue;
            padding: 10px;
            margin: 5px;
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

</div>
    <div class="indented-line"></div>

  
    <div class="input-container">

</div>
</div>


</div>


<div class="indented-line"></div>

<br>
<br>










<h1>Sales Performance<h1>
<div class="container">

<div id="donutchart" style="height: 300px; width: 200px; background-color: lightblue; padding: 5px;"></div>
<div id="barchart" style="height: 300px; width: 100%; background-color: black; padding: 5px;"></div>

</div>





<h1>Product Performance<h1>
<div class="container">

<div id="donutchart3" style="height: 300px; width: 200px; background-color: lightblue; padding: 5px;"></div>
<div id="line-chart" style="height: 300px; width: 100%; background-color: black; padding: 5px;"></div>

</div>







<script>
// Get the branch totals data from PHP
var branchTotals = <?php echo $jsonBranchTotals; ?>;

// Prepare the data for Morris.js
var morrisData = [];
for (var branch in branchTotals) {
    if (branchTotals.hasOwnProperty(branch)) {
        morrisData.push({
            branch: branch,
            total: branchTotals[branch] // Total members for each branch
        });
    }
}

// Create a Morris bar chart
new Morris.Bar({
    element: 'barchart', // The ID of the element in which to draw the chart
    data: morrisData, // Use the prepared data for the bar chart
    xkey: 'branch', // The key for the x-axis (branch names)
    ykeys: ['total'], // The key for the y-axis (total members)
    labels: ['Total Members'], // Label for the ykeys
    barColors: ['#0b62a4', '#7a92a3', '#4da74d', '#d9534f', '#5bc0de'], // Custom colors for the bars
    xLabelAngle: 60 // Rotate x-axis labels for better readability
});
</script>









<script>
// Get the transactions data from PHP
var transactions = <?php echo $jsonTransactions; ?>;

// Extract all unique product names from the transactions for ykeys
var products = [];
transactions.forEach(function (transaction) {
    Object.keys(transaction).forEach(function (key) {
        if (key !== 'date' && !products.includes(key)) {
            products.push(key);
        }
    });
});

// Prepare the data for Morris.js
var morrisData = transactions.map(function (transaction) {
    var entry = { date: transaction.date };
    products.forEach(function (product) {
        entry[product] = transaction[product] || 0; // Set to 0 if product does not exist for the date
    });
    return entry;
});

// Initialize Morris Line Chart
new Morris.Line({
    // ID of the element in which to draw the chart.
    element: 'line-chart',
    data: morrisData,
    xkey: 'date',
    ykeys: products,
    labels: products,
    xLabels: 'day',
    dateFormat: function (x) {
        var date = new Date(x);
        return date.toDateString();
    },

    // Styling options
    lineColors: ['#0b62a4', '#7a92a3', '#4da74d', '#d9534f', '#5bc0de'], // Add more colors as necessary
    lineWidth: 2,
    hideHover: 'auto'
});
</script>



























<script>
// Create a Morris Donut chart
new Morris.Donut({
    element: 'donutchart', // The ID of the element in which to draw the chart
    data: [
        { label: 'Month 1', value: 50 },
        { label: 'Month 2', value: 25 },
        { label: 'Month 3', value: 15 },
        { label: 'Month 4', value: 10 }
    ],
    colors: ['#0b62a4', '#7A92A3', '#4da74d', '#afd8f8'], // Colors for each section
    formatter: function (y) { return y + "%" } // Custom label formatting
});




new Morris.Donut({
    element: 'donutchart3', // The ID of the element in which to draw the chart
    data: [
        { label: 'Product 1', value: 50 },
        { label: 'Product 2', value: 25 },
        { label: 'Product 3', value: 15 },
        { label: 'Product 4', value: 10 }
    ],
    colors: ['#0b62a4', '#7A92A3', '#4da74d', '#afd8f8'], // Colors for each section
    formatter: function (y) { return y + "%" } // Custom label formatting
});



</script>





















  





  </section>





  




    </div>
  </div>
</div>









<script src="../pyscript/fetch.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../pyscript/script.js"></script>
<script src="../pyscript/add.js"></script>

</body>
</html>
