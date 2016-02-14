<script>
function validate()
{
if (document.getElementById('subscription_day').value == "")
{
alert( "<?php echo "Please Select Day"; ?>" );
document.adminForm.subscription_day.focus();
return false;
}
else if (document.getElementById('subscription_month').value == "")
{
alert( "<?php echo "Please Select Month"; ?>" );
document.adminForm.subscription_month.focus();
return false;
}
else if (document.getElementById('subscription_year').value == "" )
{
alert( "<?php echo "Please Select Year"; ?>" );
document.adminForm.subscription_year.focus();
return false;
}
}
function setDOB()
{
var day1 = document.getElementById('subscription_day');
var day2 = day1.options[day1.selectedIndex].text;
if(day2.length < 2 ) day2 = '0'+day2;
var month1 = document.getElementById('subscription_month');
var month2 = month1.options[month1.selectedIndex].value;
if(month2.length < 2 ) month2 = '0'+month2;
//alert('Montyh is :'+month2);
var year1 = document.getElementById('subscription_year');
var year2 = year1.options[year1.selectedIndex].text;
var strText= day2 +'-'+ month2 + '-'+ year2;
document.getElementById('dob').value= strText;
}
</script>
<form action="" method="post" name="adminForm" id="adminForm"
onsubmit="return validate(); ">
<table>
<tr>
<td>Date of Birth:-</td>
<td>
<select name="day" id="subscription_day" style="width:60px;" onchange="setDOB()">
<option value="">Day</option>
<?php
$strDay='';
for ($i=1; $i<=31; $i++) {
$strDay=(string)$i;
if($i<10) $strDay='0'.$strDay;
?>
<option value="<?php echo $i; ?>">
<?php echo $strDay; ?>
</option>
<?php
}
?>
</select>

<select name="month" id="subscription_month" style="width:60px;" onchange="setDOB()">
<option value="">Month</option>
<?php
function getMonthList()
{
return array( "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct",
"Nov", "Dec");
}
$list=getMonthList();
$index=1;
foreach ( $list as &$row_data ) {
?>
<option value="<?php echo $index; ?>">
<?php echo $row_data; ?>
</option>
<?php
$index=$index+1;
}
?>
</select>

<select name="year" id="subscription_year" style="width:60px;" onchange="setDOB()">
<option value="">Year</option>
<?php
for ($i=1950; $i<date('Y'); $i++) {
?>
<option value="<?php echo $i; ?>">
<?php echo $i; ?>
</option>
<?php
}
?>
</select>
</td>
</tr>
</table>
</br>
<input type="hidden" id="dob" name="dob" value="" />
<input type="submit" value="Save" />
<?php
if(isset($_POST['dob']))
{
$a=$_POST['dob'];
echo "Date of Birth is:-".$a;
}
?>
</form>