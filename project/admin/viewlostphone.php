
<?
$con=mysqli_connect("localhost","root","","lostphone"); # connect to db
/*
* echo $imei = $_POST['imei'] ."<br>";
* echo $brand = $_POST['brand']."<br>";
*/
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
<?
do{ ?>
<tr style="height: 70px">
<th><?echo $array[0]; ?></th>
<th><?echo $array[1]; ?></th>
<th><?echo $array[2]; ?></th>
<th><?echo $array[3]; ?></th>
<th><?echo $array[4]; ?></th>
<th><?echo $array[5]; ?></th>
<th><?echo $array[6]; ?></th>
<th><?echo $array[7]; ?></th>	
</tr>
<? } while($array=mysqli_fetch_array($result));
 ?>
</table>
