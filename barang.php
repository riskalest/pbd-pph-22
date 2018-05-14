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
	<td>
	<?php if(isset($_POST['hitung'])){ ?>
	<input type="text" value="<?php echo $hasil; ?>">
	<?php }else{ ?>
	<input type="text" value="0">
	<?php } ?>
	</td>
	</tr>
	<tr>
	<td colspan="2" align="center">
	<input type="button" value="Hitung" name="hitung" Onclick="hasil()"/>
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