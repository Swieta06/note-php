<!DOCTYPE html>
<html lang="eng">
<head>
<meta charset="UTF-8">
<title>latihan 1</title>
<style>
	.warna-baris{
		background-color:silver;
	}
</style>
</head>

<body>
<table border="1" cellpadding="10" cellspacing="0">
<?php
	for($i=1;$i<=3;$i++){
	echo "<tr class='warna-baris'>";
	for($j=1;$j<=5;$j++){
		echo"<td>$i,$j</td>";
	}
	echo"</tr>";
	
	}

?>

</table>
</body>

</html>
