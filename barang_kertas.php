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
					<li><a href="barang_kertas.php">Lain-lain</a></li>
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
					<img class="img-responsive" src="kertas.jpg" width="100%" alt="">
					<div class="overlay">
					<h2>								
					PPh Pasal 22 Kertas</br>	

					PPh Pasal 22 Kertas merupakan PPh Pasal 22 yang harus dipungut oleh badan usaha yang bergerak di 
					bidang industri kertas (produsen kertas).  PPh ini wajib dipungut untuk setiap penjualan kertas di 
					dalam negeri.</br>	</br>	

					Subjek Pemungut</br>	

					Produsen kertas wajib memungut PPh Pasal 22 Kertas apabila yang bersangkutan sudah ditunjuk 
					sebagai pemungut PPh Pasal 22 oleh KPP tempatnya terdaftar NPWP.  Penunjukan itu dilakukan melalui 
					penerbitan Surat Keputusan Penunjukan Sebagai Pemungut PPh Pasal 22 (sama seperti industri semen yang
					sudah diuraikan dalam artikel sebelumnya).</br>	</br>	

					 

					Subjek yang Dipungut</br>	

					Dalam hal ini, pihak yang dikenakan pemungutan PPh Pasal 22 (subjek yang dipungut) adalah para pembeli 
					kertas yang melakukan pembelian secara langsung kepada produsen kertas.

					Perlu diingat bahwa [embelian kertas yang dikenakan PPh Pasal 22 juga hanya apabila pembelian tersebut 
					dilakukan di dalam negeri.  Seandainya kita berada di luar negeri dan membeli kertas dari produsen 
					kertas di Indonesia, yang berarti produsen kertas itu melakukan ekspor, maka kita tentu tidak akan 
					dikenakan PPh Pasal 22.  Sebab seperti dinyatakan dalam PMK Nomor 154/PMK.03/2010, objek pemungutan 
					PPh Pasal 22 Kertas adalah penjualan di dalam negeri (bukan terhadap penjualan ekspor).</br></br>	

					 

					Tarif dan DPP</br>	

					PPh Pasal 22 Kertas yang harus dipungut oleh produsen adalah sebesar 0,1% (nol koma satu persen) 
					dari DPP PPN.  Sesuai dengan ketentuan dan peraturan di bidang PPN, yang dimaksud dengan DPP untuk 
					BKP seperti halnya kertas adalah Harga Jual.

					Misalnya jika harga jual satu rim kertas HVS Rp 55.000,- dan apabila harga jual itu belum termasuk PPN,
					berarti PPh Pasal 22 yang dikenakan = 0,1% x Rp 55.000,- atau Rp 55,- untuk setiap satu rim..  Tetapi 
					jika misalnya harga jual Rp 55.000,- sudah inlcude atau termasuk PPN 10%, maka PPh Pasal 22 yang akan 
					dikenakan adalah = (100/110 x Rp 55.000,-) x 0,1% = Rp 50,- per satu rim.</br>	

					PPh Pasal 22 tersebut harus kita bayarkan kepada produsen yang menjual kertas yang berarti menambah
					jumlah utang kita kepada produsen.  Karena dengan ketentuan ini, berarti jumlah yang harus kita (pembeli) 
					bayar kepada produsen kertas = Harga Jual (+) PPN (+) PPh Pasal 22 Kertas. Inilah makna dari kata 
					‘dipungut’ PPh Pasal 22.
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