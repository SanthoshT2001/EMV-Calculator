<html>
 <head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>EMV - Calculator</title>
 <link rel="stylesheet" href="style.css">
 </head>

<body class="body" bgcolor="lightsalmon">

<div class="header" align="center" style="background-color:linen" >
<center><hr><h2>Expected Monetary Value</h2><hr></center>
</div>

<br>
<form method="post" action="input.php">
 <?php
 echo "<b>Enter the Number of paths: </b><br><br>";
 echo str_repeat('&nbsp;', 2);
 echo "<input type='number' min='1' name=number placeholder='No.of Paths' required> <br><br>";
 ?>
 <input type="submit" name="submit1" value="Enter"/><br><br>
 </form>
 <br>
 </body>
</html>