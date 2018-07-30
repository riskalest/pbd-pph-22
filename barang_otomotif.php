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
    <title>Bootstrap 101 Template</title>

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
					<li><a href="barang_otomotif.php">Lain-lain</a></li>
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
		<div class="hovereffect">
					<img class="img-responsive" src="otomotif.jpg" width="100%" alt="">
					<div class="overlay">
					<h2>
					PPh Pasal 22 Otomotif</br>

					PPh Pasal 22 Otomotif adalah PPh yang dipungut terhadap penjualan kendaraan bermotor beroda dua (2) atau lebih, di dalam negeri yang dilakukan oleh badan usaha yang bergerak di bidang industri otomotif.  Melalui PER-57/PJ./2010 tanggal 10 Desember 2010, Dirjen Pajak menegaskan bahwa yang termasuk sebagai industri otomotif tersebut adalah ATPM (agen tunggal pemegang merek), APM (agen pemegang merek) dan importir umum kendaraan bermotor.</br></br>

					Subjek Pemungut</br>

					Sesuai dengan ketentuan yang berlaku, industri otomotif—termasuk ATPM, APM dan importir umum kendaraan bermotor—merupakan subjek yang wajib memungut PPh Pasal 22 atas penjualan kendaraan bermotor.

					Penunjukkan sebagai pemungut PPh Pasal 22 tersebut dilakukan melalui penerbitan Surat Keputusan Penunjukan Sebagai Pemungut PPh Pasal 22 oleh Kepala KPP tempat industri otomotif tersebut terdaftar NPWP.  Industri otomotif yang sudah mendapat SK penunjukkan dari Kepala KPP selanjutnya wajib memungut, menyetor dan melaporkan PPh Pasal 22 terhadap setiap penjualan kendaraan bermotor roda dua atau lebih yang dilakukan di dalam negeri.</br></br>

					Subjek yang Dipungut</br>

					Dalam hal ini subjek yang dikenakan (dipungut) PPh Pasal 22 adalah para pembeli kendaraan bermotor yang membeli kendaraan bermotor dari industri otomotif yang sudah ditunjuk sebagai pemungut PPh Pasal 22 Otomotif.</br></br>

					Tarif dan DPP</br>

					PPh Pasal 22 Otomotif yang harus dibayar pembeli kepada pemungut PPh Pasal 22 tersebut sebesar 0,45% dari DPP PPN (harga jual yang belum termasuk PPN). Misalkan kita membeli mobil dari ATPM seharga Rp 250.000.000,- di mana harga jual mobil itu belum termasuk PPN (10%) dan PPn-BM (40%).  Dengan demikian, PPh Pasal 22 yang harus yang harus kita bayar kepada ATPM tersebut adalah = 0,45% x Rp 250.000.000,- atau sebesar Rp 1.125.000,-.
					</h2>
					</div>
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