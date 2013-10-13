<html>
<head>
	<title>Kalkulator</title>
</head>
<body>
	<?php

	$angka1 = $_POST['angka1'];
	$angka2 = $_POST['angka2'];
	$operator = $_POST['operator2'];

	if ($operator == '+')
	{
	$hasil = $angka1+$angka2;
	}
	if ($operator == '-')
	{
	$hasil = $angka1-$angka2;
	}
	if ($operator == '*')
	{
	$hasil = $angka1*$angka2;
	}
	if ($operator == '/')
	{
	$hasil = $angka1/$angka2;
	}

	header ("location:index.php?hasil1=$hasil");
	?>
</body>
</html>