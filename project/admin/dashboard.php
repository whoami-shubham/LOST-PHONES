<?
session_start();
echo "<body style='background-image: url('m.png')'>";
echo " <h2 style='color:green; text-align:center'>You Sucessfully Logged in</h2>";
echo "<br>";
echo "<div align='center'><a href='lostphone.html' style='text-decoration:none;border: 1px solid #ccc;padding:5px;color:white;background:black'>Add Lost Phone</a> &nbsp &nbsp &nbsp <a href='viewlostphone.html'  style='text-decoration:none;border: 1px solid #ccc;padding:5px;color:white;background:black'>View lost phone</a></div>";
echo "<br>";
echo "<br>";
echo "<a href='logout.php'  style='text-decoration:none;border: 1px solid #ccc;padding:5px;color:green;background:black;float:right'>Log Out</a>";
echo"</body>";
?>
