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
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PPH 22 hasil produksi <span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li><a href="ratepajak.php">Tarif PPH 22</a></li>
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
			<h3>Apa itu PPH 22?</h3>
			<div style="padding:0px;overflow:auto;width:auto;height:300px;border:2px solid grey" >
			   <form method="post" action="login_proses.php">
					Pajak Penghasilan Pasal 22 </br>
					Apa yang dimaksud dengan PPh Pasal 22? </br>
					Pajak Penghasilan Pasal 22 adalah pajak yang dipungut oleh bendaharawan pemerintah, sehubungan dengan pembayaran atas penyerahan barang dan badan-badan tertentu untuk memungut pajak dari Wajib Pajak yang melakukan kegiatan di bidang impor atau kegiatan usaha di bidang lain.</br>
					Pemungutan pajak berdasarkan ketentuan ini, dimaksudkan untuk meningkatkan peran serta masyrakat dalam pengumpulan dana melalui sistem pembayaran pajak dan untuk tujuan kesederhanaan, kemudahan, dan pengenaan pajak yang tepat waktu.</br>
					Dalam hubungan ini, Menteri Keuangan menetapkan besarnya pungutan yang dapat bersifat final. Pelaksanaan ketentuan ini ditetapkan oleh Menteri Keuangan dengan mempertimbangkan antara lain:</br>
					Penunjukkan pemungut pajak secara selektif, demi pelaksanaan pemungutan pajak secara efektif dan efisien,</br>
					Tidak mengganggu kelancaran lalu lintas barang;</br>
					Prosedur pemungutan, penyetoran, dan pelaporan yang sederhana sehingga mudah dilaksanakan.</br></br>
					
					Siapa pemungut PPh Pasal 22?</br>

					1. Badan usaha yang bergerak di bidang industri semen, industri rokok, industri kertas, industri baja dan industri otomotif, yang ditunjuk oleh Kepala Kantor Pelayanan Pajak, atas penjualan hasil produksinya di dalam negeri;</br>
					2. Pertamina dan badan usaha selain Pertamina yang bergerak di bidang bahan bakar minyak jenis premix dan gas, atas penjualan hasil produksinya;</br></br>
					
					Berapakah besarnya pungutan PPh Pasal 22 atas penjualan hasil produksi yang dilakukan badan usaha yang bergerak di bidang industri semen, rokok kretek/ putih, kertas, baja otomotif ?</br>
					Atas penjualan hasil produksi yang dilakukan oleh badan usaha yang bergerak di bidang :</br>

					1. industri semen sebesar 0,25 % dari dasar pengenaan pajak (DPP) Pajak Pertambahan Nilai (PPN);</br>
					2. industri rokok kretek/putih sebesar 0,1 % dari harga bandrol. dan bersifat final;</br>
					3. industri kertas sebesar 0,1 % dari DPP PPN;</br>
					4. industri baja sebesar 0,3% dari DPP PPN;</br>
					5. industri otomotif sebesar 0,45 % dari DPP PPN; </br>
					
					yang ditunjuk oleh Kepala Kantor Pelayanan Pajak, atas penjualan hasil produksinya di dalam negeri; </br></br>
					
					Bagaimana tata cara pemungutan, penyetoran, dan pelaporan PPh Pasal 22?</br>
					Badan usaha yang bergerak di bidang industri semen, rokok, kertas, baja dan otomotif yang ditunjuk oleh Kepala Kantor Pelayanan Pajak harus memungut PPh Pasal 22 atas penjualan hasil produksinya di dalam negeri dan wajib menerbitkan Bukti Pemungutan PPh Pasal 22 dalam rangkap tiga, yaitu :</br>
					1. Lembar pertama untuk pembeli;</br>
					2. Lembar kedua untuk disampaikan kepada Direktorat Jenderal Pajak sebagai lampiran laporan bulanan;</br>
					3. Lembar ketiga untuk arsip Pemungut Pajak yang bersangkutan.</br>
					Badan usaha tersebut harus menyetorkan secara kolektif pemungutan PPh Pasal 22 selambat-lambatnya tanggal lima belas bulan takwim berikutnya setelah Masa Pajak berakhir. Pelaporan dilakukan dengan cara menyampaikan SPT Masa selambat-lambatnya dua puluh hari setelah Masa Pajak berakhir. </br></br>
			   </form> 
			</div>
		</div>
		<div id="right-sidebar" class="col-sm-4">
			<h5>picture</h5>
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