<?php
	@session_start();
	$pengguna= isset($_SESSION["user"]) ? $_SESSION["user"] : "" ;
	$nama_lengkap = isset($_SESSION["riska"]) ? $_SESSION["riska"] : "" ;
	$akses = isset($_SESSION["akses"]) ? $_SESSION["akses"] : "pinjam" ;
	if($akses == "perpus"){
		$riska = "Operator perpus";
	}else{
		$riska = "Peminjam";
	}
?>
<!doctype html>
<html>
    <head>
        <title>KALKULATOR PPH22</title>
        <link rel="stylesheet" href="style.css">
    </head>
	<body>
        <div id="header">
            <h1>KALKULATOR PPH22</h1>
		</div>
		<div style="clear: both"></div>
        <div id="info_pengguna">
		<center>
			<?php
			if(!empty($pengguna)){
				echo "Sedang login sebagai : $pengguna, 
					  Nama lengkap : $nama_lengkap <br/>
					  Akses sebagai : $riska ";
				$tampil_login = "display:none";
				$tampil_logout = "";
			}else{
				$tampil_login = "";
				$tampil_logout = "display:none";
			}
			?>
			</center>
		</div>

       