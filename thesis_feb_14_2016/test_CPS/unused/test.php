<html>
<head>
</head>
<body>
<form action="test_function.php" method="POST">
<select name="dateOfBirth">
  <option value="">---DD---</option>
  <?php for ($i = 1; $i <= 31; $i++) : ?>
  <option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
  <?php endfor; ?>
</select>

<select name="monthOfBirth">
  <option value="">---MM---</option>
  <?php for ($i = 1; $i <= 12; $i++) : ?>
  <option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
  <?php endfor; ?>
</select>


<select name="yearOfBirth">
  <option value="">---YY---</option>
  <?php for ($i = 1980; $i < date('Y'); $i++) : ?>
  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
  <?php endfor; ?>
  
 <br /><br />
 <p><input type="submit" name="submit" value="Submit"></p>
</select>
</body>
</html>