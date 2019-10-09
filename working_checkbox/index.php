<!DOCTYPE html>
<html>
<head>
<title>PHP: Get Values of Multiple Checked Checkboxes</title>
<link rel="stylesheet" href="css/php_checkbox.css" />
</head>

<body>
<div class="container">
<div class="main">

<?php include 'checkbox_value.php';
include 'connection.php';?>

<form action="checkbox_value.php" method="post">

<input type="checkbox" name="check_list[]" class="checklist" value = "Your racIP is: "><label>racIP</label></br>

<input type="checkbox" name="check_list[]" class="checklist" value = "Your racUser is: "<label>racUser</label></br>

<input type="checkbox" name="check_list[]" class="checklist" value = "Your racPass is: "><label>racPass</label></br>

<input type="checkbox" name="check_list[]" class="checklist" value = "Your finalRacIP is: "><label>finalRacIP</label></br>

<input type="checkbox" name="check_list[]" class="checklist" value = "Your finalRacMask is: "><label>finalRacMask</label></br>

<input type="checkbox" name="check_list[]" class="checklist" value = "Your finalRacGW is: "><label>finalRacGW</label></br>

<input type="checkbox" name="check_list[]" class="checklist" value = "Your finalRacUser is: "><label>finalRacUser</label></br>

<input type="checkbox" name="check_list[]" class="checklist" value = "Your finalRacPass is: "><label>finalRacPass</label></br>

<input type="checkbox" name="check_list[]" class="checklist" value = "Hypervisor status is: "><label>isHypervisor</label></br>

<input type="checkbox" name="check_list[]" class="checklist" value =<?php echo "$numVms "?> ><label>numVms</label>
<br/>
<br/>
<input type="submit" name="submit" value="Submit" />


</form>

</div>
</div>
</body>
</html>