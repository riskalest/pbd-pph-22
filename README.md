= KalkulatorPPh22 =

*Pokok Masalah* 

Membangun aplikasi perhitungan pph pasal 22

*Batasan*

KalkulatorPPh22 adalah aplikasi dan layanan web sumber dan isi terbuka untuk 
menghitung PPh pasal 22.

Aplikasi meyediakan daftar tingkat pajak sesuai barang yang kena pajak

Aplikasi hanya menghitung pph 22 dari barang yang sudah di list

== Pengembang ==

* Riska Lestari - https://github.com/riskalest


== Development Tools ==

* Prinsip dasar tampilan dan kode adalah sederhana dan mudah
* Bahasa pemrograman yang digunakan untuk membuat aplikasi ini adalah php
* Database server yang digunakan adalah MongoDB

== Instalasi Development Tools ==

* Menggunakan visual Studio Code, git, 
* Tools dapat di install pada sistem operasi berbasis windows,

== Cara Menjalankan ==

* Di dalam apl ini sudah terdapat daftar tingkat pajak dan Anda juga dapat menambahkan tingkat Anda sendiri, bahkan untuk jumlah pecahan kecil.
* Anda hanya dapat menghitung ppn pasal 22
* Aplikasi ini cepat dan dirancang dengan baik

== Lisensi aplikasi ==

http://igos.co.id/XAMPP#Lisensi

== 07 Mei 2018 ==

* Membuat form input pengguna
  ## index.php
  <?php include_once ('template_atas.php'); ?>
	<head>
        <title>Aplikasi Perhitungan PPh 22</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
   <form method="post" action="barang.php">
   <center>
   <div id="form-login">
      <h1>LOGIN USER</h1>
      <input placeholder="Username" type="text"/> <br/>  <br/> 
      <input placeholder="Password" type="password"/> <br/>  <br/>  
      <button class="btn">Log in</button> <br/> <br/> <br/> <br/> <br/> <br/> <br/> 
	  </center>
	</div>
   </form> 
</body>

<?php include_once ('template_bawah.php') ; ?>


* Memebuat form untuk perhitungan serta membuat template
  ## barang.php
  <?php include_once ('template_atas.php'); ?>
	<head>
        <title>Aplikasi Perhitungan PPh 22</title>
        <link rel="stylesheet" href="style.css">
    </head>
<?php 
include "koneksi.php";
$sql = "select * from barang where idbarang order by idbarang desc";
$hasil = mysqli_query($kon, $sql);
if(!$hasil)
	die("Gagal query..". mysqli_error()); ?>
<body>
<form action="barang.php" method="post">
<center>
<div id="form-login">
<h2>.:: KalkulatorPPH22 ::.</h2>
<table border="1">
	<tr>
	<td>Nama Barang</td>
	<td><select name="barang">  
	<option value="">Silahkan Pilih</option>  
	<option value="kertas">Kertas</option>  
	<option value="baja">Baja</option>  
	<option value="otomotif">Otomotif</option>  
	<option value="rokok">Rokok</option>  
	<option value="bbnnonpemerintah">BBM non Pemerintah</option>  
	<option value="bbmpemerintah">BBM Pemerintah</option>  
	<option value="gas">Gas, LPG, Pelumas</option>  
	</select></td>
	</tr>
	<tr>
	<td>PPN</td>
	<td><input type="text" name="ppn" /></td>
	</tr>
	<tr>
	<td>Rate Pajak</td>
	<td><input type="text" name="ratepajak" /></td>
	</tr>
	<tr>
	<td>Harga Bruto</td>
	<td><input type="text" name="hargabruto" /></td>
	</tr>
	<tr>
	<td>PPH 22</td>
	<td><input type="text" name="pph22" disabled/></td>
	</tr>
	<tr>
	<td colspan="2" align="center">
	<input type="button" value="Hitung" name="proses" />
	<input type="reset" value="Reset" name="reset" />
	<input type="button" value="Keluar"/>
	</td>
	</tr>
</table>
</form>
</center>
</div> 
</body>

<?php include_once ('template_bawah.php') ; ?>

## style.php
body{
    background-image: url("bag_layar.jpg");
	font-family: Comics Sans MS;
}
#wrap{
    width: 800px;
	margin: auto;
	background-color: #fff;
	border-radius: 10px;
	border: 3px double #000 ;
}
#header {
    background-image: url('g3.jpg');
	height: 100px;
	margin-top: -20px;
}
#header h1{
	color: red;
	padding: 40px 0px 0px 20px;
	text-shadow: #fff 1px 1px 3px;
	text-align: center;
	font-family: Comics Sans MS;
}

#konten{
	padding: 5px;
	width: 605px;
	float: right;
	font-size: 9pt;
	margin: 5px;
}
#konten a{
	text-decoration: none;
	color: #000;
	border: thin solid #9a9a9a;
	background-color: #dadada;
	padding: 3px;
	text-align: center;
	color : blue;
	display: block;
	max-width: 200px;
	float: left;
	margin: 3px;
}
#konten table{
	margin: 5px 0px;
	border: none;
	border-top: 1px solid #dadada;
	border-right: 1px solid #dadada;
	clear: both;
}
#konten td, th{
	border: none;
	border-left: 1px  solid #bababa;
	border-bottom: 1px solid #dadada;
	padding: 2px;
}
#form-login h1{
color : red;
}
#form-login h2{
color : red;
}
#input:focus {
outline: none;
}

#form {
background:#fcfcfc;
border-radius:20px;
padding:20px;
padding-top:30px;
width:200px;
margin:0 auto;
margin-top: 50px;
box-shadow:0px 15px 30px #40403d;
}
#h1 {
text-align:center;
font-size:2.0em;
font-weight:700;
color:#c7ccd0;
margin-bottom:24px;
}
#h1:hover{
font-size:2.4em;
}
#input {
width:250px;
background:#c7ccd0;
border:0;
padding:20px;
border-radius:10px;
margin-bottom: 5px;
}
.btn {
width: 100px;
height: 30px;
padding:5px;
border-radius:10px;
border:0;
background:#326799;
font-size:1.2em;
color:#fff;
box-shadow:0px 3px 0px #0b4072;
cursor: pointer;
}
.btn:active {
top:3px;
box-shadow:none;
outline: below;
}
#info_pengguna{
	color : red;
	border-bottom: 1px solid #dadada;
	padding: 5px;
	text-align: center;
	font-size: 11pt;
}
#footer{
	background-image: url('g2.png');
	height: 120px;
}
#footer #text{
	color: #fff;
	padding: #20px;
	text-align: center-left;
	font-size: 5pt;
	text-shadow: #000 1px 1px 2px;
}

## template_atas.php
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
    
   ## template_bawah.php
     	</div>
</div>
<div style="clear: both"></div>
<div id="footer">
    <div id="text">
</div>
</div>
</div>
</body>
</html>

* Membuat koneksi ke database
  ## koneksi.php
  <?php
error_reporting(E_ALL ^ E_DEPRECATED);
$host = "localhost";
$user = "root";
$pass = "";
$dbName = "pph22";

$kon = mysqli_connect($host,$user, $pass);
if(!$kon)
	die("Gagal Koneksi...");
	
$hasil = mysqli_select_db($kon, $dbName);
if(!$hasil){
	$hasil = mysqli_query($kon, "CREATE DATABASE $dbName");
	if(!$hasil)
		die("Gagal Buat Database");
	else 
		$hasil = mysqli_select_db($kon, $dbName);
		if(!$hasil) die ("Gagal Konek Database");
}
$sqlTabelBarang = "create table if not exists barang(
				idbarang int auto_increment not null primary key,
				nama varchar(40) not null,
				hargasatuan int not null,
				KEY(nama) )";				
mysqli_query($kon, $sqlTabelBarang) or die("Gagal Buat Tabel Barang");
echo "Tabel Barang Siap <hr/>" ;
?>
