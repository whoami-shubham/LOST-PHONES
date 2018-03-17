<?php
$con=mysqli_connect("localhost","root","","lostphone"); # connect to db
$imei = htmlspecialchars($_POST['imei']);      # htmlspecialchars() is used to prevent xss attacks
$name = htmlspecialchars($_POST['name']);
$brand = htmlspecialchars($_POST['brand']);
$phnumber = htmlspecialchars($_POST['phnumber']);
$address = htmlspecialchars($_POST['address']);
$dop = htmlspecialchars($_POST['dop']);
$dol = htmlspecialchars($_POST['dol']);
$shopname = $_POST['shopname'];
/*   these extra code is for debugging  just remove the comments and test your code  !
 echo $imei = $_POST['imei'] ."<br>";
 echo $name = $_POST['name']."<br>";
 echo $brand = $_POST['brand']."<br>";
 echo $phnumber = $_POST['phnumber']."<br>";
 echo $address = $_POST['address']."<br>";
 echo $dop = $_POST['dop']."<br>";
 echo $dol = $_POST['dol']."<br>";
 echo $shopname = $_POST['shopname']."<br>";
*/
#write query
$query="INSERT INTO lostmobile(imei, brand, dop, shopname, dol, name, address, phnumber) VALUES ('$imei','$brand','$dop','$shopname','$dol','$name','$address','$phnumber')";
/*
 echo "<br>";
 echo $query;  
*/
$result = mysqli_query($con,$query);
if($result){
  echo '<h3 style="color:green;text-align:center">Sucessfully registered </h3>';
}

else{
	header('location:lostphone.html');
}


?>
