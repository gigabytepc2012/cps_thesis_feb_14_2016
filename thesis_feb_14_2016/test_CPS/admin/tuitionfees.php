<?php
//connect to database
require '../db/connect.php';

$qry = "SELECT * FROM tbl_tuitionfees";
$result = mysql_query($qry);
if(isset($_POST['submit'])){
//grab post values
	$year = $_POST['year'];
	$PREP = $_POST['PREP'];
	$ELEM = $_POST['ELEM'];
	$JRHS = $_POST['JRHS'];
	$SRHS = $_POST['SRHS'];
//query
	$qry = "INSERT INTO tbl_tuitionfees (year, PREP, ELEM, JRHS, SRHS)
			VALUES
			('$year','$PREP','$ELEM','$JRHS','$SRHS')";

	mysql_query($qry);
		echo '<script>window.alert("New School Tuition Fees has been Created");</script>';
}

mysql_close();
?>
<a href="../index_page.php">INDEX PAGE</a></br></br>
<!--ADDING OF TUITION FEES -->
<form method="POST">
<fieldset size="auto">
	<legend>ADD NEW TUITION FEES</legend>
<pre>
</br>SY:		<input type="text" name="year" id="year" required autocomplete=off>
</br>PREP:		<input type="text" name="PREP" id="PREP" required autocomplete=off>
</br>ELEM:		<input type="text" name="ELEM" id="ELEM" required autocomplete=off>
</br>JRHS:		<input type="text" name="JRHS" id="JRHS" required autocomplete=off>
</br>SRHS:		<input type="text" name="SRHS" id="SRHS" required autocomplete=off>
</pre> 
</br><input type="submit" name="submit" value="Submit">
</fieldset>
</form>

<pre>

<!-- SHOW TABLE FOR ALL TUITION FEES-->
<b>Current Tuition Fees:</b>
<table border="1" style="width:75%">
	<tr>
		<th>ID</th>
		<th>YEAR</th>
		<th>PREP</th>
		<th>ELEM</th>
		<th>JRHS</th>
		<th>SRHS</th>
	</tr>
<?php while ($row = mysql_fetch_array($result)){?>
	<tr>
		<th><?php echo $row['id'];?></th>
		<th><?php echo $row['year'];?></th>
		<th><?php echo $row['PREP'];?></th>
		<th><?php echo $row['ELEM'];?></th>
		<th><?php echo $row['JRHS'];?></th>
		<th><?php echo $row['SRHS'];?></th>
	</tr>
<?php } ?>
</table>
</pre>
