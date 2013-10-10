<html>
<head>
	<title>Data Checkbox</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		Makanan :<br>
		<input type="checkbox" name="makan[]" value="Sate" /br>Sate 
		<input type="checkbox" name="makan[]" value="Soto" checked=" 
		//<?php
			?>" 
			/> Soto
		<input type="checkbox" name="makan[]" value="Bakso" />Bakso
		<br />
		
		<input type="submit" value="ok" />
	</form>

<?php
//Ekstraksi nilai
	if (isset($_POST['makan'])){
		foreach ($_POST['makan'] as $key => $val) {
			//echo $key . ' ' .$val . '<br />'; 
			echo $val . '<br />'; 
		}
	}
?>

</body>
</html>