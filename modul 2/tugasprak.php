<!DOCTYPE html>
<!-- Algoritma -->
<!-- 1. masuk dengam meng-inputkan username dan password -->
<!-- 2. akan ada peringatan jika username dan password yang dimasukkan salah -->
<!-- 3. user harus berupa huruf dan tidak boleh kosong -->
<!-- 4. begitu juga dengan password -->
<!-- 5. login -->
<html>
	<head>
		<title>Tugas Praktikum</title>
		<!-- tampilan pada web browser -->
		<style>
			body
			{ background-color: #cccccc;}
			.content{
				background-color: #b2b2b2;
				margin: 100px auto;
				padding: 5px 20px 40px 20px;
				width: 350px;
				border: solid 3px #999999;
			}
			.min_content{
				margin: 0px auto;
				width: 250px;
			}
			.content h1{
				color: #7f7f7f;
			}
			.content label{
				display: block;
			}
			.content input{
				display: block;
				margin: 5px 0 0 0;
				padding: 5px;
			}
		</style>
	</head>
	<body>
	<!-- inputan yang seharusnya di gunakan-->
	<?php
		if(isset($_POST['user'])&&isset($_POST['pass'])){
				if($_POST['user']=='user'&&$_POST['pass']=='user'){
					echo "
					<script>
						alert('SELAMAT DATANG');
					</script>
					";
				}else{
					echo "
					<script>
						alert('Username atau Password Salah !');
					</script>
					";
				}
			}
	?>
	
	<form name="flogin" action="<?php $_SERVER['PHP_SELF'];?>" method="post" onsubmit="return validateForm()">
			<div class="content">
				<div class="min_content">
					<h1>Login</h1>
				</div>
				<hr color="#999999" />
				<div class="min_content">
					<label>Username</label>
					<input type="text" name="user" id="user" autofocus />
					<label>Password</label>
					<input type="password" name="pass" />
					<input type="submit" value="Login" />
				</div>
			</div>
		</form>
		
		<!-- validasi untk inputan yang salah -->
		<script>
			function validateForm(){
				var x=document.forms["flogin"]["user"].value;
				if (x==null || x==""){//validasi jika inputan pada username masih kosong
					alert("Username Kosong !");
					document.getElementById("user").focus();
				  	return false;
				}
				var y=document.forms["flogin"]["pass"].value;
				if (y==null || y==""){// validasi jika inputan pada password masih kosong
					alert("Password Kosong !");
					document.getElementById("user").focus();
				  	return false;
				}
				//validasi untuk inputan dengan inputan huruf
				var alphaExp = /^[a-zA-Z]+$/;
				if(x.match(alphaExp)){
					if(y.match(alphaExp)){
						return true;
					}else{
						alert("Password Harus Huruf");
						document.getElementById("user").focus();
						return false;
					}
				}else{
					alert("Username Harus Huruf");
					document.getElementById("user").focus();
					return false;
				}
			}
		</script>
	</body>
</html>