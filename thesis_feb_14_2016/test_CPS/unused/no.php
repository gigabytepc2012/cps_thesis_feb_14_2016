<?php
//connect to database
	session_start();
	$con = mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('cpsdb', $con);

//query the database table
	$query="";
	
	
?>
<?php
//code for echoing values after search
if (!empty($_REQUEST['term'])) {

$term = mysql_real_escape_string($_REQUEST['term']);     

$sql = "SELECT * FROM tbl_studreg WHERE id LIKE '%".$term."%'"; 
$r_query = mysql_query($sql); 
?>
<!DOCTYPE HTML>
<html>
<head>
<style type="text/css">
    .fieldset-auto-width {
         display: inline-block;
    }
</style>
<h2>Welcome Homepage Dolores Academy C.P.S.</h2>
<title>Dolores CPS Home</title>
<a href="index.php">Home</a>
|<a href="studentreg.php">Register Student</a>
|<a href="list.php">Students List</a>
|<a href="signout.php">Sign Out</a>
</head>
<body bgcolor="gray">
<form action="index.php" method="POST">

<!--Code for Searching and Outputing Results-->
<p>Search Students:
<input type="text" id="txtsearch" placeholder="Search by ID" name="term" onkeypress="return isNumber(event)"/>

<!--script that allows number only for searchbox -->
<script type="text/javascript">
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
</script>
<input type="submit" name="btnSubmit" value="Search">

</p>
<?php

	while ($row = mysql_fetch_array($r_query)){ 

?> 
<b>Results:</b>
<br/><br/>
<b>Full Name:</b>

<br/>
<b>Gender:<?php echo ''.$row['gender'];?></b>
<br/><br/>

<?php
	}
?>



<b>SY:</b>
<!--Option menu for SY tuition term, default value is newest -->
<select>
	<option>2012-2013</option>
	<option>2013-2014</option>
	<option>2014-2015</option>
</select>







</body>
</html>

<?php

}else{
	echo 'error';
}
?>
}