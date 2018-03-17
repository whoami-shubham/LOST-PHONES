<?php
echo '<h1 style="text-align:center">Chess Board</h1>';

$i;$j;$k=1;
echo '<div style="margin-left:25%">';
for($i=0;$i<8;$i++){

for($j=0;$j<8;$j++){
	?>
  <?php	echo '<div style="width:8%;height:8%;border: 1px solid black;float:left;';
  ?> 

 <?php
 if($k%2!=0){
 echo '"></div>';
 }
 else{
     echo ';background:black"></div>';
 } 
 $k++;
 if($j==7){
 	$k++;
 }
 ?>
	<?php
}
#echo '<br>';
echo '<div style="clear:both"></div>';
}
echo '</div>';





?>
