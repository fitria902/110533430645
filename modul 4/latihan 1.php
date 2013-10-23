<html>
<head>
	<title>Set Cookie</title>
</head>
	<body>
	
	<?php
	
	//men-set nilai cookie
	setcookie('nilai_cookie', 'nama_cookie');
	
	//mendapatkan nilai cookie
	echo $_COOKIE['nilai_cookie'];
	
	?>
	<p>Tekan Refresh (F5);
	
	</body>
</html>