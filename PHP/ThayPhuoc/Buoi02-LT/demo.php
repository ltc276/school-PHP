<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form id="forml" name="forml" method="post" action="">
	<p>
		<input type="submit" name="nut" id="nut" value="Lua chon a"/>
	</p>
		<p>
		<input type="submit" name="nut" id="nut" value="Lua chon b"/>
	</p>
	


</form>
<?php
	switch($_POST['nut'])
	{
		case 'Lua chon a':
		{
			echo 'ban da chon lua chon a';
			break;
		}
		case 'Lua chon b':
		{
			echo 'ban da chon lua chon b';
			break;
		}
	}
	?>
    
</body>
</html>