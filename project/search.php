<?php
$con=mysqli_connect("localhost","root","","lostphone"); # connect to db
$search=htmlspecialchars($_POST['search']);

$query="SELECT * FROM lostmobile WHERE imei='$search'";
$result=mysqli_query($con,$query);
$array=mysqli_fetch_array($result);

?>
<table border="1px">
<tr>
<th>imei</th>
<th>brand</th>
<th>dop</th>
<th>shopname</th>
<th>dol</th>
<th>name</th>
<th>address</th>
<th>phone number</th>
</tr>
<tr>
<?php
if(arrysize>0){ ?>
<th><?php echo htmlspecialchars($array[0]); ?></th>
<th><?php echo htmlspecialchars($array[1]); ?></th>
<th><?php echo htmlspecialchars($array[2]); ?></th>
<th><?php echo htmlspecialchars($array[3]); ?></th>
<th><?php echo htmlspecialchars($array[4]); ?></th>
<th><?php echo htmlspecialchars($array[5]); ?></th>
<th><?php echo htmlspecialchars($array[6]); ?></th>
<th><?php echo htmlspecialchars($array[7]); ?></th>
<? } ?>
	
</tr>
</table>
