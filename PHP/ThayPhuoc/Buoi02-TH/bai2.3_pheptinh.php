<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" >
<p>
	A:<input type="text" name="a" value="<?php echo $a ?>" ><br/>
	B:<input type="text" name="b" value="<?php echo $b ?>"><br/>
	<input type="submit" name="nut" id="nut" value="cong"/>
	<input type="submit" name="nut" id="nut" value="tru"/>
	<input type="submit" name="nut" id="nut" value="nhan"/>
	<input type="submit" name="nut" id="nut" value="chia"/>
</p>
</form>
<?php
$a = $_POST['a'];
$b = $_POST['b'];
if(isset($_POST['nut'])){ echo 'Kết quả là:';
 switch($_POST['nut'])
 {
	 
	 case 'cong':{
		 echo $a + $b;
		 break;
	 }
	  case 'tru':{
		 echo $a - $b;
		 break;
	 }
	  case 'nhan':{
		 echo $a * $b;
		 break;
	 }
	  case 'chia':{
		 echo $a / $b;
		 break;
	 }
	 
 }
 }
?>

    
</body>
</html>