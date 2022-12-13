 <html>
 <head>
 <title>19MIS0136 - T. Santhosh</title>
 <link rel="stylesheet" href="t.css">
 </head>
<body class="body" bgcolor="linen">

<div class="headdiv" align="center" style="background-color:lightsalmon" >
<center><hr><h2>Expected Monetary Value</h2><hr></center>
</div>


 <?php
 if (isset($_POST['submit2'])) {
 $arr = $_POST['stud'];
 $invest = $_POST['invest'];
$s = $_POST['one'];
 $emv = -123456789;
 $path = 0;
 for ($i = 0; $i < $s; $i++) {
 $sum = 0;
 for ($j = 0; $j < 2; $j++){
	 $tot = 1;
	 for($k = 0; $k<2; $k++){
	  
		if (!empty($arr[$i]["$j"]["$k"])){
			if($k==0){
				$arr[$i]["$j"]["$k"]=$arr[$i]["$j"]["$k"]/100;
			}
			if($k==1){
				$arr[$i]["$j"]["$k"]=$arr[$i]["$j"]["$k"]-$invest[$i];
			}
			$tot = $tot * $arr[$i]["$j"]["$k"];
		}
		if($arr[$i]["$j"]["$k"]==0){
		$tot=0;
		}
		
	 }
$sum = $sum + $tot;

 }
 $arr[$i]["total"] = $sum;
 $t = $i + 1;
 $arr[$i]["name"] = "Path-$t";
 if($emv<$sum){
	 $emv = $sum;
	 $path = $t;
 }
 }

 echo "<br><center><div1><table align='center'><caption>
       EMV-table
     </caption>";
 
 echo "<tr><th>S.no</th><th>Path Id</th><th>EMV</th></tr>";
 for ($i = 0; $i < $s; $i++) {
 $t = $i + 1;
 echo "<tr><td>$t</td><td>" . $arr[$i]['name'] . "</td><td>" . $arr[$i]['total'] . "</td></tr>";

 }
 echo "<style>table, th, td {border:2px solid brown;}</style>";
 echo "</table></div1></center>";
 echo str_repeat('&nbsp;', 250);
 echo "<b>Emv - $emv <br> </b>";
 echo str_repeat('&nbsp;', 250);
 echo "<b>Path - $path.</b>";
 }

  
 ?>
 
 
 </body>
</html>