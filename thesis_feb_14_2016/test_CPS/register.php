<?php
//connect to database
require 'db/connect.php';
//FOR "tbl_studreg", get post data then insert it to db
if(isset($_POST['submit'])){
	$fname = $_POST['txtfname'];
	$mname = $_POST['txtmname'];
	$lname = $_POST['txtlname'];
	$gender = $_POST['gender'];
		
//query
	$qry = "insert into tbl_studreg (fname, mname, lname, gender, bday) 
	values 
	('$fname', '$mname', '$lname', '$gender', 'bday')";
	mysql_query($qry);

		echo '<script>window.alert("a new student has been officially registered!");</script>';

	
}
	mysql_close();


?>
<!-- HEADINGS-->
<title>Register Student</title>
<a href="index_page.php">INDEX PAGE</a></br>
<style type="text/css">
	.fieldset-auto-width {
		display:inline-block;
	}
</style>
<form action="" method="POST">
<fieldset class="fieldset-auto-width">
	<legend>BASIC INFO</legend>
<pre>
</br>		<input type="text" placeholder="First Name" name="txtfname" id="txtfname" require autocomplete=off>
</br> 		<input type="text" placeholder="Middle Initial" name="txtmname" id="txtmname" require autocomplete=off>
</br>		<input type="text" placeholder="Last Name"name="txtlname" id="txtlname" require autocomplete=off>

</br>Gender: 			<select name="gender">
    					<option value="" disabled selected>Select</option>
    					<option value="M">M</option>
    					<option value="F">F</option>
</select>
</pre>
</form>











<!--	CODES BELOW PENDING TO IMPLEMENT 
<input type="text" placeholder="DD" size="2" maxlength="2" name="dd" id="txtfname" require autocomplete=off>&nbsp;
- <input type="text" placeholder="MM" size="2" maxlength="2" name="mm" id="txtfname" require autocomplete=off>&nbsp;
- <input type="text" placeholder="YYYY" size="4" maxlength="4"name="yy" id="txtfname" require autocomplete=off>&nbsp;
</p>
</pre>
</fieldset>


<fieldset>
	<legend>ACCOUNT INFO</legend>
<pre>
</br>School Year:		<select>
						</select>

</br>Year Level:		<select>
						</select>

</br>Discount:			<input type="text" name="txtdiscount" id="txtdiscount" require autocomplete=off>


</pre>
</fieldset> -->
<br/><br/><input type="submit" name="submit" value="REGISTER">

