<?php
//connect to database
include "db/connect.php";

//collect post
$sql = "SELECT * FROM tbl_studreg ";

if(isset($_POST['search'])){
	$search_term = mysql_real_escape_string($_POST['search_box']);
	$sql .= "WHERE id = '{$search_term}'";
}


$query = mysql_query($sql) or die(mysql_error());

?>
<form name="search_form" method="POST" action="searchechoing.php">
Search: <input type="text" name="search_box" placeholder="Search ID"/>
<input type="submit" name="search" value="Search">
</form>

<?php while($row = mysql_fetch_array($query)){ ?>

<pre>
	</br>Full Name: <?php echo $row['fname']; ?> <?php echo $row['mname']; ?> <?php echo $row['lname']; ?>
	</br>Gender:<?php echo $row['gender']; ?>
</pre>

<!--tuition fees-->
<pre>
	</br>Tuition Fee: <?php echo 'Tuiotion test'; ?>
	</br>Balance: <?php echo 'Balance Test'; ?>
	</br>Payment: <?php echo 'echo test'; ?>
	</br>Total Balance: <?php echo 'echo test'; ?>
</pre>
<?php } ?>





