<?php
//connect to database
include 'db/connect.php';

//collect post/search
$sql = "SELECT * FROM tbl_balance ";

if(isset($_POST['search'])){
	$search_term = mysql_real_escape_string($_POST['search_box']);
	$sql .= "WHERE id = '{$search_term}'";
}


$query = mysql_query($sql) or die(mysql_error());

?>

<form name="search" method="POST" action="tuitiontransact.php">
Search: <input type="text" name="search_box" placeholder="Search ID"/>
<input type="submit" name="search" value="Search">
</form>

<?php while($row = mysql_fetch_array($query)){ ?>

<pre>
	School Year: <select>
					<option><?php ?></option>
				</select>

	Year Level: <?php echo $row['level']; ?>
</pre>

<?php } ?>