<?php
    defined('_VALID') or die('Not Allowed');
        
    function init_login(){
     //simulasi data account nama dan password
     //username
	 $nama = 'admin';
	 //password	 
     $pass = 'admin';        
     session_start();
        //pengecekan inputan
		if(isset($_POST['nama']) && isset($_POST['pass'])){        
            $n = trim($_POST['nama']);
            $p = trim($_POST['pass']); 
			//jika username dan password benar
            if(($n === $nama) && ($p === $pass)){                
                if(isset($_POST['remember'])){                  
                //jika sama,set cookie
                    $_SESSION['login']=$n;
                    //redireksi
?>
    <script type="text/javascript">
    document.location.href="./";
    </script>
<?php
	//jika cekbox dicentang
    }else{
        $_SESSION['login']='';                                                                        
    }
    }else{     
		echo '<h1 style="margin:10px auto;text-align:center;">nama atau password tidak cocok</h1>';
    return false;
        }
    }
}
    function validate(){
	//cek ketersediaan session
    if(!isset($_SESSION['login'])){                                        
        ?>
        <div class="inner">
            <form action="" method="post">
                <table border="0" cellpadding="5">
					<tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama" /></td>        
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="pass" /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="checkbox" name="remember" value="simpan" /> Remember Me</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Login" /></td>
                    </tr>
                </table>
            </form>
        </div>
        <?php
        exit;
    }
	//logout
    if(isset($_GET['m']) && $_GET['m'] == 'Logout'){
    //hapus session
        if(isset($_SESSION['login'])){                                
            unset($_SESSION['login']);
            session_destroy();
        }
                        
    //redireksi halaman
     ?>
    <script type="text/javascript">
        document.location.href="./";
    </script>
    <?php
         }
    }
?