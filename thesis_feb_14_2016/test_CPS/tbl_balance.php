<?php
//connect to database
require	"db/connect.php";
//session
	
//query
	$qry = " SELECT* FROM tbl_balance where ID='1'";
	$result = mysql_query($qry);

	if(isset($_POST['btnUpdate'])){

	$getBalance = $_POST['totalBal'];

	$qry = "update tbl_balance set current='$getBalance' where ID='1'";
	mysql_query($qry);

	header('location: tbl_balance.php');

	}

	if(isset($_POST['btnCancel'])){

		header('location: tbl_balance.php');

	}

	mysql_close();

?>


<!DOCTYPE html>
<html>
<head>
<title>Tuition Fee</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/javascript">

	function transact () {

	document.getElementById('hiddenBal').value = document.getElementById('currentBalance').innerHTML;

	document.getElementById('totalBal').value = document.getElementById('hiddenBal').value - document.getElementById('txtdp').value;

}


</script>

</head>
<body>
<form method="post">	
<a href="studlist.php" style="text-decoration:none;font-size:21px;">...Return to list</a>
<div style="background-color:#FF9988;padding:20px;width:500px;border-radius:12px;">
	
<?php

	while ($row = mysql_fetch_array($result)) {

?>

	<pre>
<b>Student Name:</b> <span><?php echo $row['id']; ?></span>
<b>Year Level:</b> <span><?php echo $row['level']; ?></span>
<b>School Year:</b> <span><?php echo $row['year']; ?></span>
<b>Tuition Fee:</b> <span><?php echo $row['tuitionfee']; ?></span>
<b>Current Balance:</b> <span id="currentBalance"><?php echo $row['current']; ?></span>

<input type="hidden" name="hiddenBal" id="hiddenBal">
<b>Down Payment:</b>  <input type="text" name="txtdp" id="txtdp" required><br>
<b>Total Balance:</b> <input type="text" name="totalBal" id="totalBal" readonly><br><br>
<?php
	
	}

?>
<input type="button" name="btnTransact" id="btnTransact" value="Transact!" onclick="transact()">
	</pre>
</div>



<input type="submit" name="btnUpdate" id="btnUpdate" value="Update!"> <input type="submit" name="btnCancel" id="btnCancel" value="Cancel"><br><br>

</form>
</body>
</html>
