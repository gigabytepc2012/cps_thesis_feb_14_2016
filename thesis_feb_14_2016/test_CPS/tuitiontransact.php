<?php
//connect to database
require 'db/start.php';

//join tables
$userQuery ="
			SELECT
				tbl_studreg.id,
				tbl_studreg.fname,
				tbl_balance.tuitionfee,
				tbl_balance.level,
				tbl_balance.year
			FROM tbl_studreg
			LEFT JOIN tbl_balance
			ON tbl_studreg.id = tbl_balance.id
";

$users = $db->query($userQuery);

//check if value something exist
if(isset($_GET['id'])) {
		
		$submitquery = "
			{$submitquery}
			WHERE tbl_studreg.id = :tbl_id
		";

		$user = $db->prepare($submitquery);
		$user->execute(['tbl_id' => $_GET['id']]);

		$selectedID = $user->fetch(PDO::FETCH_ASSOC);
		var_dump($selectedID);
}

?>
<form action="tuitiontransact.php" method="GET">
	<select name="transact">
			<option value="">Choose</option>
	<?php foreach($users->fetchAll()as $user):?>
			<option value="<?php echo $user['level']; ?>">
				<?php echo $user['year'];?></option>
	<?php endforeach; ?>
	</select>
	<input type="submit" value="Show Details">
</form>
