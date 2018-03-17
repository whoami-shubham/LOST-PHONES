
<?php
$con=mysqli_connect("localhost","root","","lostphone"); # connect to db
#write query
$query="SELECT * FROM lostmobile ";
/*
* echo "<br>";
* echo $query;
*/
$result=mysqli_query($con,$query);
if($result){
$array=mysqli_fetch_array($result);
}
?>
<table border="1px" align="center" style="width: 100%">
<tr style="height: 30px">
<th>imei</th>
<th>brand</th>
<th>purchased</th>
<th>shop name</th>
<th>losted</th>
<th>name</th>
<th>address</th>
<th>phone number</th>
</tr>
<?php
do{ ?>
<tr style="height: 70px">
<th><?php echo htmlspecialchars($array[0]); ?></th>
<th><?php echo htmlspecialchars($array[1]); ?></th>
<th><?php echo htmlspecialchars($array[2]); ?></th>
<th><?php echo htmlspecialchars($array[3]); ?></th>
<th><?php echo htmlspecialchars($array[4]); ?></th>
<th><?php echo htmlspecialchars($array[5]); ?></th>
<th><?php echo htmlspecialchars($array[6]); ?></th>
<th><?php echo htmlspecialchars($array[7]); ?></th>	
</tr>
<?php } while($array=mysqli_fetch_array($result));
 ?>
</table>
