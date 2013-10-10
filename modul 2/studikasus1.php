<html>
<head>
	<title>Preselecting Seleksi</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		Buah
		<select name="fruit">
			<option value="Nanas">Nanas
			<option value="Apel">Apel
			<option value="Kiwi" selected ="
			<?php
			if ($_POST['fruit'] == 'Kiwi') {
				echo 'selected="selected"';
			}
			?>" 
			>Kiwi
			<option value="Asam">Asam
			
		</select> <br />
		
		
		<input type="submit" value="ok" />
	</form>

<?php
	if (isset($_POST['fruit'])){
		echo $_POST['fruit'];
		}
?>

</body>
</html>