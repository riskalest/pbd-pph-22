<!DOCTYPE html>
<html lang="en">
<?php 
	include "koneksi.php";
?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PPH 22 Hasil Produksi</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link href="style.css" rel="stylesheet"/>
  </head>
  <body>
    <div class="container">
		<div id="header">
			<h1>PPH 22</h1>
		</div>	
	</div>
	<div class="container">
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="index.php">Home</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="tentang_pph22.php">Tentang PPH 22 <span class="sr-only">(current)</span></a></li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PPH 22 hasil produksi<span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li><a href="ratepajak.php">Tarif PPH 22</a></li>
					<li><a href="laporan_perhitungan.php">Laporan perhitungan</a></li>
					<li><a href="barang_semen.php">Lain-lain</a></li>
				  </ul>
				</li>
			  </ul>
			  <form class="navbar-form navbar-right">
				<div class="form-group">
				  <input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			  </form>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</div>
	<div class="container">
		<div id="main-content" class="col-sm-8">
			<h3>------------------------------------------------------------------------------</h3>
			<h5>Selamat Datang di Aplikasi perhitungan PPH 22 hasil Produksi.</h5>
			<h5>Aplikasi ini diperuntukkan untuk perhitungan PPH 22 hasil Produksi.</h5> 
			<div class ="halo">
				<embed src="selamatdatang.jpg" align="center" width="100%">
			</div>
		</div>
		<div id="right-sidebar" class="col-sm-4">
			<h5>Gambar produk PPH 22</h5>
			<div class="row">
			<div class="col-sm-6">
				<div class="hovereffect">
					<img class="img-responsive" src="semen.jpg" alt="">
					<div class="overlay">
						<h2>Semen</h2>
						<a class="info" href="barang_semen.php">buka</a>
					</div>
				</div>
			</div>	
			<div class="col-sm-6">
				<div class="hovereffect">
					<img class="img-responsive" src="otomotif.jpg" alt="">
					<div class="overlay">
						<h2>Otomotif</h2>
						<a class="info" href="barang_otomotif.php">buka</a>
					</div>
				</div>
			</div>
			</div>
			<div class="row">
			<div class="col-md-6">
				<div class="hovereffect">
					<img class="img-responsive" src="baja.jpg" alt="">
					<div class="overlay">
						<h2>Baja</h2>
						<a class="info" href="barang_baja.php">buka</a>
					</div>
				</div>
			</div>
			<div class="col-md-6">			
				<div class="hovereffect">
					<img class="img-responsive" src="kertas.jpg" alt="">
					<div class="overlay">
						<h2>Kertas</h2>
						<a class="info" href="barang_kertas.php">buka</a>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
			<hr style="background-color: red;">
			Developer; 2018, Riska Lestari</p>
			<p>163210009</p>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>