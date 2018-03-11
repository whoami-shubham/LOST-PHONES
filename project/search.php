<?
$con=mysqli_connect("localhost","root","","lostmobile"); # connect to db
$search=$_POST['search'];

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
<th><?echo $array[0]; ?></th>
<th><?echo $array[1]; ?></th>
<th><?echo $array[2]; ?></th>
<th><?echo $array[3]; ?></th>
<th><?echo $array[4]; ?></th>
<th><?echo $array[5]; ?></th>
<th><?echo $array[6]; ?></th>
<th><?echo $array[7]; ?></th>	
</tr>
</table>