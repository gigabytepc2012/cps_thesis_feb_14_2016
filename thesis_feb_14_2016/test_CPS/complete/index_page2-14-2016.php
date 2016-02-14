<?php

//connect to database
include "db/connect.php";

//collect post
$sql = "SELECT id,fname,mname,lname,gender
FROM tbl_studreg ";

if(isset($_POST['search'])){
	$search_term = mysql_real_escape_string($_POST['search_box']);
	$sql .= "WHERE id = '{$search_term}'";
}


$query = mysql_query($sql) or die(mysql_error());

?>
<!--HEADER-->
<title>Homepage</title>
<a href="admin/tuitionfees.php">ADMIN TUITION</a>|
<a href="register.php">REGISTER NEW STUDENT</a></br></br>
<form name="search_form" method="POST" action="index_page.php">
Search: <input type="text" name="search_box" placeholder="Search ID" require autocomplete=off>
<input type="submit" name="search" value="Search">
<!--SCRIPT FOR ADDING STUDENT TUITION-->
<script>
function addTuition() {
    window.open("function/current_id.php", "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=center, left=center, width=400, height=400");
}
</script>
<!--BASIC INFO-->
</form>
<fieldset>
<?php while($row = mysql_fetch_array($query)){ ?>
<legend>Student Info</legend>
<pre>
	</br>Full Name: <?php echo $row['fname']; ?> <?php echo $row['mname']; ?> <?php echo $row['lname']; ?>
	</br>Gender:<?php echo $row['gender']; ?>
	

	</br><button onclick="addTuition()">ADD TUITION</button>
	</br>School Year: 
	</br>Year Level:
</pre>
</fieldset>
<?php } ?>

<?php
//connect to database
require	"db/connect.php";
//session
	
//query
	$search_term=mysql_real_escape_string($_POST['search_box']);
	$qry = " SELECT* FROM tbl_balance where ID='{$search_term}'";
	$result = mysql_query($qry);

	if(isset($_POST['btnUpdate'])){

	$getBalance = $_POST['totalBal'];

	$qry = "update tbl_balance set current='$getBalance' where ID='{$search_term}'";
	mysql_query($qry);

	header('location: index_page.php');

	}

	if(isset($_POST['btnCancel'])){

		header('location: index_page.php');

	}

	mysql_close();

?>



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



