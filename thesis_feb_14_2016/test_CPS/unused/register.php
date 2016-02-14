<?php
//connect to database
require 'db/connect.php';



?>
<fieldset>
	<legend>BASIC INFO</legend>
<pre>
</br>First Name: 		<input type="text" name="txtfname" id="txtfname" require autocomplete=off>
</br>Middle Initial: 	<input type="text" name="txtmname" id="txtmname" require autocomplete=off>
</br>Last Name: 		<input type="text" name="txtlname" id="txtlname" require autocomplete=off>

</br>Gender: 			<select>
    					<option value="" disabled selected>Select</option>
    					<option value="M">M</option>
    					<option value="F">F</option>
</select>
</br>Date of Birth:
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
</fieldset>
<input type="submit" name="submit" value="REGISTER">