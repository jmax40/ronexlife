<?php require_once '../dbconnection/conn.php'; ?>


<?php 

$mysqli = new mysqli($servername, $username, $password, $dbname) or die(mysqli_error($mysqli));
	$query = "SELECT * FROM cutoff WHERE id = '1'";
	$result = mysqli_query($mysqli,$query);
	while ($row=mysqli_fetch_assoc($result))
	{
    $No = $row['id'];
	$startdate = $row['startdate'];
    $enddate = $row['enddate'];
	
	}

 ?>



<?php 
// Connect to the database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}






$query = "SELECT SUM(price) AS total FROM member WHERE branch = 'Esperanza'";
$brand1 = mysqli_query($conn, $query);

// Store the result in a variable
$row = mysqli_fetch_assoc($brand1);
$Esptarget = $row['total']+ 0;




$query = "SELECT SUM(price) AS total FROM member WHERE branch = 'Isulan'";
$brand2 = mysqli_query($conn, $query);

// Store the result in a variable
$row = mysqli_fetch_assoc($brand2);
$Isutarget = $row['total']+ 0;




$query = "SELECT SUM(price) AS total FROM member WHERE branch = 'Tacurong'";
$brand3 = mysqli_query($conn, $query);

// Store the result in a variable
$row = mysqli_fetch_assoc($brand3);
$Tactarget = $row['total']+ 0;

// Close the connection
mysqli_close($conn);
?>






<?php 

// Connect to the database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



$query = "SELECT SUM(amount) AS total FROM payment WHERE branch = 'Esperanza' AND date BETWEEN '$startdate' AND '$enddate'";
$product1 = mysqli_query($conn, $query);

// Store the result in a variable
$row = mysqli_fetch_assoc($product1);
$Espcollected = $row['total']+ 0;




$query = "SELECT SUM(amount) AS total FROM payment WHERE branch = 'Isulan' AND date BETWEEN '$startdate' AND '$enddate' ";
$product2 = mysqli_query($conn, $query);

// Store the result in a variable
$row = mysqli_fetch_assoc($product2);
$Isucollected = $row['total']+ 0;


$query = "SELECT SUM(amount) AS total FROM payment WHERE branch = 'Tacurong' AND date BETWEEN '$startdate' AND '$enddate'";
$product2 = mysqli_query($conn, $query);

// Store the result in a variable
$row = mysqli_fetch_assoc($product2);
$Taccollected = $row['total']+ 0;

// Moris dunot Chart 






// Close the connection
mysqli_close($conn);
?>







<?php
// Check if the denominator is zero before performing the calculation
$Esperanza = $Esptarget != 0 ? round(($Espcollected / $Esptarget) * 100) : 0; 
$Tacurong = $Tactarget != 0 ? round(($Taccollected / $Tactarget) * 100) : 0;
$Bagumbayan = $Isutarget != 0 ? round(($Isucollected / $Isutarget) * 100) : 0;
?>













<?php 

	require_once'connection.php';
	$query = "SELECT * FROM cutoff WHERE id = '1'";
	$result = mysqli_query($mysqli,$query);
	while ($row=mysqli_fetch_assoc($result))
	{
    $No = $row['id'];
	$startdate = $row['startdate'];
    $enddate = $row['enddate'];
	
	}

 ?>



<?php 
// Connect to the database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}






$query = "SELECT SUM(price) AS total FROM member WHERE branch = 'Esperanza'";
$brand1 = mysqli_query($conn, $query);

// Store the result in a variable
$row = mysqli_fetch_assoc($brand1);
$Esptarget = $row['total']+ 0;




$query = "SELECT SUM(price) AS total FROM member WHERE branch = 'Isulan'";
$brand2 = mysqli_query($conn, $query);

// Store the result in a variable
$row = mysqli_fetch_assoc($brand2);
$Isutarget = $row['total']+ 0;




$query = "SELECT SUM(price) AS total FROM member WHERE branch = 'Tacurong'";
$brand3 = mysqli_query($conn, $query);

// Store the result in a variable
$row = mysqli_fetch_assoc($brand3);
$Tactarget = $row['total']+ 0;

// Close the connection
mysqli_close($conn);
?>






<?php 

// Connect to the database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



$query = "SELECT SUM(amount) AS total FROM payment WHERE branch = 'Esperanza' AND date BETWEEN '$startdate' AND '$enddate'";
$product1 = mysqli_query($conn, $query);

// Store the result in a variable
$row = mysqli_fetch_assoc($product1);
$Espcollected = $row['total']+ 0;




$query = "SELECT SUM(amount) AS total FROM payment WHERE branch = 'Isulan' AND date BETWEEN '$startdate' AND '$enddate' ";
$product2 = mysqli_query($conn, $query);

// Store the result in a variable
$row = mysqli_fetch_assoc($product2);
$Isucollected = $row['total']+ 0;


$query = "SELECT SUM(amount) AS total FROM payment WHERE branch = 'Tacurong' AND date BETWEEN '$startdate' AND '$enddate'";
$product2 = mysqli_query($conn, $query);

// Store the result in a variable
$row = mysqli_fetch_assoc($product2);
$Taccollected = $row['total']+ 0;

// Moris dunot Chart 






// Close the connection
mysqli_close($conn);
?>







<?php
// Check if the denominator is zero before performing the calculation
$Esperanza = $Esptarget != 0 ? round(($Espcollected / $Esptarget) * 100) : 0; 
$Tacurong = $Tactarget != 0 ? round(($Taccollected / $Tactarget) * 100) : 0;
$Bagumbayan = $Isutarget != 0 ? round(($Isucollected / $Isutarget) * 100) : 0;
?>










      

<?php 
$mysqli = new mysqli($servername, $username, $password, $dbname) or die(mysqli_error($mysqli));
    $No = $_GET['GetID'];
	$query = "SELECT * FROM member WHERE id = $No";
	$result = mysqli_query($mysqli,$query);
	while ($row=mysqli_fetch_assoc($result))
	{
   

  $No = $row['id'];
  $idmember = $row['idmember'];
  $idmemberdisplay = $row['idmember'];
  $mop = $row['mop'];

  $result = $mysqli->query("SELECT MAX(duedate) as counter FROM payment where idmember ='$idmember'") or die($mysqli->error . ' ' . $mysqli->connect_error);
  $row1 = $result->fetch_assoc();
  
  if ($row1["counter"] !== null) {
    // duedate has a value, use the maximum duedate value
    $due_date = $row1["counter"];
    //echo $due_date;
  } else {
    // duedate is empty, use the value from another field
    $result2 = $mysqli->query("SELECT edate FROM member where idmember ='$idmember'") or die($mysqli->error . ' ' . $mysqli->connect_error);
    $row2 = $result2->fetch_assoc();
    $due_date = $row2['edate'];
    //echo $due_date;
  }
  



	$edate = $row['edate'];
  $price = $row['price'];
	$fname =$row['fname'];
	$mname = $row['mname'];
	$lname = $row['lname'];
	$brgy = $row['brgy'];
	$city = $row['city'];
	$prov = $row['prov'];
  $pcontact = $row['pcontact'];
  $coordinator = $row['coordinator'];
  $contractamount = $row['contractamount'];
  $value_from_db = "13";
  $modetag = $row['modetag'];
  $product = $row['product'];
  $branch = $row['branch'];








  



 $future_date = date("Y-m-d", strtotime(" 30 days"));
 $current_date = date("Y-m-d");
 $difference = strtotime($current_date) - strtotime($due_date);
$difference_in_days = floor($difference / (60*60*24));
    

$number1 = 30;
$number2 = 90;
$number3 = 180;
$number4 = 360;
$number5 = 1825;
$price1 = 380;
$price2 = 360;
$price3 = 350;
$price4 = 340;
$price5 = 18500;

if ($mop == $number1) {
  
  $total = $mop / 30;
  $equals = $total * $price1;

} elseif ($mop  == $number2) {

  $total = $mop / 30;
  $equals = $total * $price2;

}  elseif ($mop  == $number3) {
  $total = $mop / 30;
  $equals = $total * $price3;
}  elseif ($mop  == $number4) {
  $total = $mop / 30;
  $equals = $total * $price4;
}  elseif ($mop  == $number5) {
  $total = $mop / 30;
  $equals = $total * $price5;
} 
else {
    echo "";
   
}

	}

 ?>





<?php

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 // getting user id from the querystring

$sql = "SELECT SUM(amount) as total FROM payment WHERE idmember = '$idmember' ";
$result1 = $conn->query($sql);

if ($result1->num_rows > 0) {
    // output data of each row
    while($row1 = $result1->fetch_assoc()) {
        $resultprice = $row1["total"] ? $row1["total"] : 0;
    }
} else {
    
}

$conn->close();
?>





<?php


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 // getting user id from the querystring

 $sql = "SELECT SUM(installment) as total FROM payment WHERE idmember = '$idmember' ";
$result1 = $conn->query($sql);

if ($result1->num_rows > 0) {
    // output data of each row
    while($row1 = $result1->fetch_assoc()) {
        $installment = $row1["total"] ? $row1["total"] : 0;
    }
} else {
    
}

$conn->close();
?>

<?php 
$conn = mysqli_connect($servername, $username, $password, $dbname);

$query = "SELECT * FROM payment WHERE No ='$No' ORDER BY duedate DESC LIMIT 1";
$result = mysqli_query($conn, $query);

$input_field = '';

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $duedate = date('Y-m-d', strtotime($row['duedate']. ' + 1 day'));
  $input_field = '<p><input type="hidden" id="current_date" value="' .$duedate. '"></p>';
 

} else {
  $input_field = '<p><input type="hidden" id="current_date" value="' .$edate. '"></p>';
  

}

mysqli_close($conn);
?>








<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">





    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ronex Life Insurance</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  
   <link rel="stylesheet" href="CSS/Style.css">
   
   <script type="text/javascript" src="assets/js/member.js"></script>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>

   <link href="assets/css/Notifstyle.css" rel="stylesheet" />
   <link href="../css/imagefontcolorstyle.css" rel="stylesheet" />
   <link href="../css/search.css" rel="stylesheet" />


</head>

<style>
 table {
    border-collapse: collapse;
    border: 1px solid black;
    margin: 0 auto;

}

td, th {
    border: 1px solid black;
    padding: 8px;
}

.green {
    color: green;
}

.red {
    color: red;
}


</style>

<body>

<?php require_once'connection.php'; ?>




<?php 
	    require_once'connection.php';
		$result = $mysqli->query("SELECT * FROM payment where No ='$No' ORDER BY installment DESC") or die($mysqli->error);
	
	?>




    
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                //<a class="navbar-brand" href="index.php">HOME</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">

            <li>
    <div id="countdown">
      <div class="countdown-box" id="days">
        <span id="days-number"></span>
        <span>Day</span>
      </div>
      <div class="countdown-box" id="hours">
        <span id="hours-number"></span>
        <span>Hrs</span>
      </div>
      <div class="countdown-box" id="minutes">
        <span id="minutes-number"></span>
        <span>Min</span>
      </div>
      <div class="countdown-box" id="seconds">
        <span id="seconds-number"></span>
        <span>Sec</span>
      </div>
    </div>
  </li>
            
                <!-- /.dropdown -->
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Esperanza</strong>
                                        <span class="pull-right text-muted"> <?php echo $Esperanza; ?>% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $Esperanza; ?>%">
                                            <span class="sr-only"><?php echo $Esperanza; ?>% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                         
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Tacurong</strong>
                                        <span class="pull-right text-muted"><?php echo $Tacurong; ?>% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $Tacurong; ?>%">
                                            <span class="sr-only"><?php echo $Tacurong; ?>% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Bagumbayan</strong>
                                        <span class="pull-right text-muted"><?php echo $Bagumbayan; ?>% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $Bagumbayan; ?>%">
                                            <span class="sr-only"><?php echo $Bagumbayan; ?>% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> <?php echo $session_id; ?></a>
                        </li>
                        <li><a data-toggle='modal' href='#Usersettings' ><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li>
            <form method="post">
            &nbsp;&nbsp;<button type="submit" name="end_session" class="btn"><i class="fa fa-sign-out fa-fw"></i> Logout</button>
             </form>
    </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            
        </nav>



        <!--/. NAV TOP  -->
       
            <div id="page-inner">
            <h1 id="XWX"></h1>
            
            <div style="text-align: right;">
  <?php
  $differencedate = $difference_in_days; // or any other value
  if ($differencedate < 0) {
    $differencedate = 0;
  }
  
  if ($difference_in_days >= 1) {
    $label_color = 'red';
} else {
    $label_color = 'green';
}
  ?>
  
  &nbsp;&nbsp;&nbsp;&nbsp;<label> AGING: </label><label style="color: <?php echo $label_color; ?>">&nbsp;&nbsp;<?php echo $differencedate; ?> Days</label>
</div>

            <center>    <img src="../img/headings/Head.png" alt="image"></img>
            
            <table>

			 <div class="row">
             
       

       <div class="wrap row">
      <br>
      <br>
  <div class="search col">
    <input type="text" id="myInput" onkeyup="searchTable()" class="searchTerm" placeholder="What are you looking for?">
    <button type="submit" class="searchButton">
      <i class="fa fa-search"></i>
    </button>
  </div>
  <div class="buttons">
  <a class="fa-solid fa-square-plus fa-2x" data-toggle='modal' href='#Useradd' > </a>
<i class="fa-sharp fa-solid fa-print fa-2x" style="color: green;" onclick="printTable()"></i>
<i class="fa-solid fa-file-excel fa-2x" style="color: green;" onclick="exportExcel()"></i>
  
  </div>
</div>


</center>

<br>

<br>


<br>

<br>


 <table class="table table-bordered" id='myTable'>
										
                            <th >Date</th>
								<th >Or Number</th>
								<th >Ins. Number</th>
								<th >Plan type </th>
                                <th >Payment</th>
                                <th >Next Duedate</th>
                                <th >balance</th>
                                <th >Delete</th>
                            
						
													
							</tr>

                            <?php 
							while ($row=$result->fetch_assoc()): ?>
							<tr class="mb-2">
              <td class="text-center" style="color: blue;">
  <?php echo date('F j, Y', strtotime($row['date'])); ?>
</td>
							<td class="text-center"><?php echo $row['ornumber']; ?></td>
                            <td class="text-center"><?php echo $row['installment'];?></td>
                            <td class="text-center"><?php echo $row['modetag'];?></td>
                            <td class="text-center"><?php echo $row['amount'];?></td>
                            <td class="text-center" style="color: red;">
  <?php echo date('F j, Y', strtotime($row['duedate'])); ?>
</td>
                            <td class="text-center"><?php echo $row['balance'];?></td>
                            <td class="text-center"> <a href="Delpayment.php?Del=<?php echo $row['id']; ?>&coordinator=<?php echo urlencode($No); ?>" class="fa-solid fa-trash fa-2x" style="color: red;"></a> </td>
								
								
							</tr>
						<?php endwhile; ?>				
 </table>


 <script>



function printTable() {
    var table = document.getElementById("myTable");
    var printWindow = window.open('', '', 'height=700,width=700');
    printWindow.document.write('<html><head><title>Table</title>');
    printWindow.document.write('<style> table { margin: 0 auto; border-collapse: collapse; border: 1px solid black; } td, th { border: 1px solid black; padding: 8px; } </style>');
    printWindow.document.write('</head><body >');
    printWindow.document.write('<img src="../img/headings/Head.png" style="width:100%;">');
    printWindow.document.write(table.outerHTML);
    printWindow.document.write('</body></html>');
    printWindow.document.close();
    printWindow.print();
}


function searchTable() {
    // Get the input field value
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
  
    // Loop through all table rows
    for (i = 0; i < tr.length; i++) {
      // Get all cells in the current row
      td = tr[i].getElementsByTagName("td");
      var match = false;
  
      // Check if the row is a heading row
      if (tr[i].getElementsByTagName("th").length > 0) {
        tr[i].style.display = "";
        continue;
      }
  
      // Loop through all the table cells in the current row
      for (var j = 0; j < td.length; j++) {
          txtValue = td[j].textContent || td[j].innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
              match = true;
              break;
          }
      }
      if (match) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }



 </script>


                    <div class="col-md-12">
                        <h1 class="page-header">


                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
				 
				</div>
             <!-- /. PAGE INNER  -->
             <table>
 
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
  <div id="Useradd" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#02a332">
        <button type="button" id="Useradd" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-weight: bold;color: #F0F0F0">
        <center>PAYMENT INFORMATION </center></h4>
      </div>

      <div class="modal-body" >       	
      	<center> 
        		<form method="post" action="insertpayment.php" enctype='multipart/form-data' style="width: 98%;">        		
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">OR NUMBER:<label style="color: red;font-size:20px;"></label><input style="width:270px;" type="text" placeholder="Input OR Number" name="ornumber" ></span></p>
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;   AMOUNT:<label style="color: red;font-size:20px;"></label><input style="width:270px;" type="text" value="<?php echo $price; ?>" placeholder="Input Amount " id="tot2" name="amount" ></span></p>
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INS:<label style="color: red;font-size:20px;"> <input style="width:270px;" type="number" name="installment" id="value2"  value ="1"  oninput="multiply();calculate_future_date();"></p>
                <input type="hidden" id="date" name="effectdate" value="<?php echo $edate ?>">
                <input type="hidden" name="fullname" value="<?php echo $fname. " " .$mname." ".$lname ?>"/> 
                <input type="hidden"  name="idmember" value="<?php echo $idmember ?>">
                <input type="hidden" name="address" value="<?php echo $brgy.' '.$city.' '.$prov; ?>">
                <input type="hidden" id="<?php echo $mop ?>" value="<?php echo $mop ?>" oninput="calculate_future_date();">
                <?php echo $input_field; ?>
                  <input type="hidden" name="duedate" id="future_date">



                 
                 <?php


// Check how many days past the due date we are
if ($difference_in_days > 1 && $difference_in_days <= 30) {
    echo '<input type="hidden" name="aging" value ="30" >';
    echo '<input type="hidden" name="dueprice" value ="'.(2 * $price).'" >';
} elseif ($difference_in_days > 31 && $difference_in_days <= 60) {
    echo '<input type="hidden" name="aging" value ="60" >';
    echo '<input type="hidden" name="dueprice" value ="'. (3 * $price) .'" >';
} elseif ($difference_in_days > 61 && $difference_in_days <= 90) {
    echo '<input type="hidden" name = "aging" value ="90" >';
    echo '<input type="hidden" name="dueprice" value ="'. (4 * $price) .'" >';
}elseif ($difference_in_days > 91 && $difference_in_days <= 120) {
    echo '<input type="hidden" name = "aging" value ="120" >';
    echo '<input type="hidden" name="dueprice" value ="'. (5 * $price) .'" >';
}elseif ($difference_in_days > 121 && $difference_in_days <= 1000) {
    echo '<input type="hidden" name = "aging" value ="150" >';
    echo '<input type="hidden" name = "statusaging" value ="Active" >';
    echo '<input type="hidden" name="dueprice" value ="'. (6 * $price) .'" >';
}else {
    echo '<input type="hidden" name ="aging" value="0">';
    echo '<input type="hidden" name="dueprice" value ="'.$price.'" >';
}

// Add a class to the label based on the value of $difference_in_days
?>







<?php


$number1 = 30;
$number2 = 90;
$number3 = 180;
$number4 = 360;
$number5 = 1825;





if ($mop == $number1) {
   
    if (empty($installment) || !is_numeric($installment)) {
        $installment = 0;
    }
    if ($installment >= 0 && $installment <= 12) {
        echo '<input type="hidden" name="comm" value="'.$price.'"/>';
        echo '<input type="hidden" name="ncomm" value=""/>';
    } elseif ($installment >= 12 && $installment <= 1000) {
        echo '<input type="hidden" name="ncomm" value="'.$price.'"/>';
        echo '<input type="hidden" name="comm" value=""/>';
    } else {
        echo '<input type="hidden" name ="aging" value="Active">';
    }
    


  
  } elseif ($mop  == $number2) {
   
  
    if (empty($installment) || !is_numeric($installment)) {
        $installment = 0;
    }
    if ($installment >= 0 && $installment <= 4) {
        echo '<input type="hidden" name="comm" value="'.$price.'"/>';
        echo '<input type="hidden" name="ncomm" value=""/>';
    } elseif ($installment >= 4 && $installment <= 1000) {
        echo '<input type="hidden" name="ncomm" value="'.$price.'"/>';
        echo '<input type="hidden" name="comm" value=""/>';
    } else {
        echo '<input type="hidden" name ="aging" value="Active">';
    }
    
 
  
  }  elseif ($mop  == $number3) {

    if (empty($installment) || !is_numeric($installment)) {
        $installment = 0;
    }
    if ($installment >= 0 && $installment <= 2) {
        echo '<input type="hidden" name="comm" value="'.$price.'"/>';
        echo '<input type="hidden" name="ncomm" value=""/>';
    } elseif ($installment >= 2 && $installment <= 1000) {
        echo '<input type="hidden" name="ncomm" value="'.$price.'"/>';
        echo '<input type="hidden" name="comm" value=""/>';
    } else {
        echo '<input type="hidden" name ="aging" value="Active">';
    }
  

  
    
  }  elseif ($mop  == $number4) {
    
    if (empty($installment) || !is_numeric($installment)) {
        $installment = 0;
    }
    if ($installment >= 0 && $installment <= 1) {
        echo '<input type="hidden" name="comm" value="'.$price.'"/>';
        echo '<input type="hidden" name="ncomm" value=""/>';
    } elseif ($installment >= 1 && $installment <= 1000) {
        echo '<input type="hidden" name="ncomm" value="'.$price.'"/>';
        echo '<input type="hidden" name="comm" value=""/>';
    } else {
        echo '<input type="hidden" name ="aging" value="Active">';
    }
  

  
  }  elseif ($mop  == $number5) {
   
    if (empty($installment) || !is_numeric($installment)) {
        $installment = 0;
    }
    if ($installment >= 0 && $installment <= 1) {
        echo '<input type="hidden" name="ncomm" value="'.$price.'"/>';
        echo '<input type="hidden" name="comm" value=""/>';
    } elseif ($installment >= 1 && $installment <= 1000) {
        echo '<input type="hidden" name="ncomm" value="'.$price.'"/>';
        echo '<input type="hidden" name="comm" value=""/>';
    } else {
        echo '<input type="hidden" name ="aging" value="Active">';
    }
   
   
  } 
  else {
      echo "";
     
  }


?>


<script>
  calculate_future_date();
  function calculate_future_date() {
  var value1 = document.getElementById("<?php echo $mop ?>").value;
  var value2 = document.getElementById("value2").value;
  var current_date = new Date(document.getElementById("current_date").value);
  var future_date = new Date(current_date.getTime() + (value1*value2 * 24 * 60 * 60 * 1000));
  var y = future_date.getFullYear();
  var m = ('0' + (future_date.getMonth() + 1)).slice(-2);
  var d = ('0' + future_date.getDate()).slice(-2);
  var future_date_str = y + '-' + m + '-' + d;
  document.getElementById("future_date").value = future_date_str;
}

  function multiply() {
    var value2 = document.getElementById("value2").value;
    var z = document.getElementById("tot").value;
    var total = value2 * z;
    document.getElementById("tot1").value = total;
    document.getElementById("tot2").value = total;
   
  }
</script>







<input type="hidden" value="<?php echo $price; ?>" id="tot">
<input type="hidden" name="price" value="<?php echo $price; ?>" id="tot1">
<input type="hidden" name="total" value="<?php echo  $contractamount; ?>" id="tot">
<input type="hidden" name ="pcontact"value="<?php echo $pcontact; ?>">
<input type="hidden" name ="walkinginstallment" value="<?php echo $installment; ?>">
<input type="hidden"  name="minusprice" value="<?php echo $resultprice ?>">
<input type="hidden"  name="coordinator" value="<?php echo $coordinator ?>">
<input type="hidden"  name="date" id="datenow">
<input type="hidden"  name="coordinator" value="<?php echo $coordinator ?>">
<input type="hidden"  name="modetag" value="<?php echo $modetag ?>">
<input type="hidden"  name="No" value="<?php echo $No ?>">
<input type="hidden"  name="product" value="<?php echo $product ?>">
<input type="hidden"     name="branch" value="<?php echo $branch ?>">

<script>
  var today = new Date();
  var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
  document.getElementById("datenow").value = date;
</script>

         </center>

      </div>
      <div class="modal-footer">
       <button type="submit" class="btn btn-success" name="update"> Pay now </button>&nbsp;
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
      </div>
      </div> 
       </form>


  </div>
 


  

  <div id="Usersettings" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#222d32">
        <button type="button" id="Useradd" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-weight: bold;color: #F0F0F0">
        <center> SETTINGS </center></h4>
      </div>

      <div class="modal-body" >   
        
      <form method="post" action="cutoff.php?GetID=1" enctype='multipart/form-data' style="width: 98%;">        		
               
               <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;CUT OFF DATE:<label style="color: red;font-size:20px;"></span></p>
               <div class="row">
 <div class="col-md-6">
   <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Start Date:<label style="color: red;font-size:20px;">*</label><input type="date" style="width:135px;" name="startdate" value = "<?php echo $startdate ?>"></input></p>
 </div>
 <div class="col-md-6">
   <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;End Date:<label style="color: red;font-size:20px;">*</label><input type="date" style="width:135px;" name="enddate" value = "<?php echo $enddate ?>"></input></p>
 </div>
</div>

     </div>
     <div class="modal-footer">
      <button type="submit" class="btn btn-success" name="apply"> Apply </button>&nbsp;
       <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
     </div>
     </div> 
      </form>
      	 
      
       </div>
    </div>
  </div>
</div> 

 <script> 

var startDate = new Date("<?php echo $startdate ?>");
var endDate = new Date("<?php echo $enddate ?>");
// Set the start and end dates


// Update the countdown timer every second
setInterval(function() {
  // Get the current time
  var now = new Date().getTime();

  // Calculate the time remaining
  var timeRemaining = endDate.getTime() - now;

  // Calculate the days, hours, minutes, and seconds remaining
  var days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
  var hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

  // Update the countdown timer
  document.getElementById("days-number").innerHTML = days;
  document.getElementById("hours-number").innerHTML = hours;
  document.getElementById("minutes-number").innerHTML = minutes;
  document.getElementById("seconds-number").innerHTML = seconds;

  // If the countdown is over, display a message
  if (timeRemaining < 0) {
    document.getElementById("countdown").innerHTML = "Countdown over!";
  }
}, 1000);

</script>

   
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   <style> .toggle-switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.toggle-switch input {
  display: none;
}

.toggle-slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
  border-radius: 34px;
}

.toggle-slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
  border-radius: 50%;
}

input:checked + .toggle-slider {
  background-color: #2196F3;
}

input:checked + .toggle-slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

input:focus + .toggle-slider {
  box-shadow: 0 0 1px #2196F3;
}

.toggle-switch:before {
  content: "";
  display: block;
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: #ccc;
  border-radius: 34px;
}

.toggle-switch:checked:before {
  background-color: #2196F3;
}
</style>
</body>
</html>