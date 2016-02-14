<?php
	session_start();
?>
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


<!--ACCOUNT INFO/ TRANSACTION OF TUITION FEES-->
<fieldset>
<legend>Account Info</legend>
<pre>
	</br>Tuition Fee: <?php echo '5000 (Ex)'; ?>
	</br>Balance: <?php echo '2500 (ex)'; ?>
	</br>Payment: <input type="text" name="payment" placeholder="Input Amount">
	<input type="submit" name="transact" value="TRANSACT">
	</br>Total Balance: <?php echo 'echo test'; ?>

<input type="submit" name="update" value="UPDATE">
</pre>
<?php } ?>

</fieldset>



