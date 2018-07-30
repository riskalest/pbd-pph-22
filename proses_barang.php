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
		<div id="main-content" class="col-sm-12">
			<h3>HASIL HITUNG</h3>
				<form action="simpan.php" method="post"> 
				<?php
				$nmbarang = $_POST["nmbarang"];
				$ppn = $_POST["ppn"];
				$ratepajak = $_POST["ratepajak"];
				$hargabruto = $_POST["hargabruto"];
				$satuan = $_POST["satuan"];
				$perkalian =($ppn*$ratepajak*$hargabruto*$satuan)/100;
				$tanggal = date("Y-m-d H:i:s");
				include "koneksi.php";
				$simpan = true;
				$sql = "insert into hitung (nmbarang,ppn,ratepajak,satuan,hargabruto,pph22,tanggal) 
				values ('$nmbarang',$ppn,$ratepajak,$satuan,$hargabruto,'$perkalian','$tanggal')";
				$hasil = mysqli_query($kon, $sql);

				if(!$hasil){
					echo "Gagal Simpan, silahkan diulangi!<br />";
					echo mysqli_error($kon);
					echo "<br/> <input type='button' value='Kembali'
						onClick='self.history.back()'>";
					exit;
					}
			
				?>
			<form class="form-horizontal">
			<div class="form-group">
					<div class="col-sm-6">
						<label for="namaBarang" class="col-sm-4 control-label">Nama Barang	</label>
						<label for="namaBarang" class="col-sm-4 control-label">:	<?php echo $nmbarang?> <br/></label>
					</div>	
			</div> </br>
			<div class="form-group">
					<div class="col-sm-6">
						<label for="namaBarang" class="col-sm-4 control-label">PPH	</label>
						<label for="namaBarang" class="col-sm-4 control-label">:	<?php echo $ppn ?> <br/></label>
						<label for="namaBarang" class="col-sm-4 control-label">% (persen)	</label>
					</div>	
			</div> </br>
			<div class="form-group">
					<div class="col-sm-6">
						<label for="namaBarang" class="col-sm-4 control-label">Tarif Pajak	</label>
						<label for="namaBarang" class="col-sm-4 control-label">:	<?php echo $ratepajak?> <br/></label>
						<label for="namaBarang" class="col-sm-4 control-label">% (persen)	</label>
					</div>	
			</div> </br>
			<div class="form-group">
					<div class="col-sm-6">
						<label for="namaBarang" class="col-sm-4 control-label">Satuan	</label>
						<label for="namaBarang" class="col-sm-4 control-label">:	<?php echo $satuan?> <br/></label>
						<label for="namaBarang" class="col-sm-4 control-label">Rim/Zak/Kg/Per	</label>
					</div>	
			</div> </br>
			<div class="form-group">
					<div class="col-sm-6">
						<label for="namaBarang" class="col-sm-4 control-label">Harga Barang	</label>
						<label for="namaBarang" class="col-sm-4 control-label">:	<?php echo $hargabruto?> <br/></label>
					</div>	
			</div> </br>
			<div class="form-group">
					<div class="col-sm-6">
						<label for="namaBarang" class="col-sm-4 control-label">PPH 22	</label>
						<label for="namaBarang" class="col-sm-4 control-label">:	<?php echo $perkalian?> <br/></label>
					</div>	
			</div> </br></br>
			<div id="tombol">
				<input type="button" value="Hitung Lagi"
					onClick="window.location.assign('ratepajak.php')">
				<input type="button" value="CETAK" 
					onClick="window.print()">
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