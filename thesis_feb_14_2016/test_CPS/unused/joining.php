<?php 
//error_reporting(0);
require 'db/connect.php';
//selecting all data from people
$sql = "SELECT * FROM tbl_studreg";
//execute the query
$results = $db->query($sql);
//if there are rows head to output the list
if ($results->num_rows){
	while($row=$results->fetch_object()){
		echo "{$row->fname}<br>";

	}
}else{
	echo 'No Results';
}

