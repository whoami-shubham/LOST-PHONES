<?php
#create connection
$con=mysqli_connect("localhost","root","","lostphone");

#retrive : form parameters

 $username=htmlspecialchars($_POST['username']);
#echo "<br>";
 $password=htmlspecialchars($_REQUEST['password']); # universal acceptable

#create query

#echo "<br>";

 $query= "SELECT * FROM admin WHERE username='$username' AND password='$password'";

#execute query

$result = mysqli_query($con,$query);

#echo "<br>";
#echo $num;
if($num==1){
	echo "sucessfully logged in";
	header('location:dashboard.php');
}
else{
header('location:form.html');
}
#$con.close();

?>
