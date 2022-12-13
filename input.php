 <html>
 <head>
 <title>19MIS0136 - 19MIS0139</title>
 </head>

<body class="body" bgcolor="linen">

<div class="headdiv" align="center" style="background-color:lightsalmon" >
<center><hr><h2>Expected Monetary Value</h2><hr></center>
</div>
<br>
<form class="" method="post" action="output.php">
 <?php
 if (isset($_POST['submit1'])) {
 $n = $_POST['number'];
 for ($i = 0; $i < $n; $i++) {
 $t=$i+1;
 echo "<u><b>Path-$t</b></u> : <br>";
$count=0;	
$color = "lightgreen";
 for ($j = 0; $j < 2; $j++) {
	
	for( $k = 0; $k<2; $k++){
	
	$temp = $j + 1;
	if($k==0){
		
		echo str_repeat('&nbsp;', 110);
		echo "<b>Probability:  <input type='number' min='0' max='100' value='0' style='background-color:$color' name=stud[$i][$j][$k] placeholder='0-100' size='20' required> % </b><br><br>";
		if($j==0){
		 echo str_repeat('&nbsp;', 80);
			echo "<b>Favourable: </b><br><br>";
		}
		else{
			echo str_repeat('&nbsp;', 80);
			echo "<b>Unfavourable: </b><br><br>";
		}
	}
	else{
		echo str_repeat('&nbsp;', 110);
		echo "<b>   Revenue :-     <input type='number' min='0' value='0' style='background-color:$color' name=stud[$i][$j][$k] placeholder='0' size='10' required> $ </b><br><br>";
		$color = "gold";
		if($count==0){
			echo "<b> Investment-$t: <input type='number' min='0' pattern='[0-9]' onkeypress='return !(event.charCode == 46)' step='1' title='Must be an integer number' value='0' style='background-color:azure' name=invest[$i] placeholder='Enter digits only' size='10' required> $</b><br>";
			$count=1;
			
		}		
	}
	
	}
	
 echo "<br>";
 }
 echo "<hr>";
 echo "<br>";
 }
 ?>

 <?php
 echo "paths: ";
 echo "<input type='value' name='one' value='$n' maxlength='1' size='1' readonly><br>";
  echo "<input type='submit' name='submit2'><br>";
 }
 ?>

 </form>
 <br>


 
</body>
</html>