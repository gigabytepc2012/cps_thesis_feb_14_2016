<form action="" method="post"> 
<select name="day"> 
<option selected>Day</option> 
<?php 
    for($i=1; $i<=31; $i++) { 
        echo '<option>'. $i .'</option>'; 
    } 
    ?> 
</select> 

<select name="month"> 
<option selected>Month</option> 
<?php 
    for($i=1; $i<=12; $i++) { 
        echo '<option>'. $i .'</option>'; 
    } 
    ?> 
</select> 

<select name="year"> 
<option selected>Year</option> 
<?php 
    for($i=1925; $i<=2000; $i++) { 
        echo '<option>'. $i .'</option>'; 
    } 
    ?> 
</select> 
<input type="submit" name="submit" value="check"/> 
</form> 

<?php 
if(isset($_POST['submit'])) { 
    $dob = $_POST['day'] .'-'.$_POST['month'].'-'. $_POST['year']; 


} 
?>