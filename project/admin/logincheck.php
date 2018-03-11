<?
#create connection
$con=mysqli_connect("localhost","root","","lostphone");

#retrive : form parameters

 $username=$_POST['username'];
#echo "<br>";
 $password=$_REQUEST['password']; # universal acceptable

#create query

#echo "<br>";

 $query= "SELECT * FROM admin WHERE username='$username' AND password='$password'";

#execute query

$result = mysqli_query($con,$query);
$num=mysqli_num_rows($result);

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
