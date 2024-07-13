<?php 
	 require_once'connection.php';
		$resultM = $mysqli->query("SELECT * FROM member WHERE status = 'Active' ORDER BY idmember DESC") or die($mysqli->error);

	?>



<?php 
	    require_once'connection.php';
		$resultLF = $mysqli->query("SELECT * FROM member where product = 'LF' AND status = 'Active'  ORDER BY idmember DESC") or die($mysqli->error);
	
	
	?>




<?php 
	     require_once'connection.php';
		$resultSS = $mysqli->query("SELECT * FROM member where product = 'SS' AND status = 'Active'  ORDER BY idmember DESC") or die($mysqli->error);
	
	
	?>
	


	<?php 
	     require_once'connection.php';
		$resultSSP = $mysqli->query("SELECT * FROM member where product = 'SSP'AND status = 'Active'  ORDER BY idmember DESC") or die($mysqli->error);
	
	
	?>
	


	<?php 
	     require_once'connection.php';
		$resultAG = $mysqli->query("SELECT * FROM member where product = 'AG' AND status = 'Active'  ORDER BY idmember DESC") or die($mysqli->error);
	
	
	?>
	