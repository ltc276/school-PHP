<html>
    <head>
        <meta charset="UTF-8">
        <title>Bài 1</title>
    </head>
    <body>
        <?php
        $x = rand(0,100);
		$y = rand(0,100);
		echo $x;
		echo '<br>';
		echo $y;
		echo '<br>';
		while ($x>$y) {
			echo 'Kết quả chỉ hiện khi X > Y :'.$x=3*$y;
			break;
		}
        ?>
    </body>
</html>