<?php include_once ('template_atas.php'); ?>
<body><h1>Hasil Perhitungan PPH 22 Hasil Produksi:</h1>
	<h1>
    <form action="" method="post">
	PPH 22 Hasil produksi adalah pajak yang dikenakan untuk barang hasil produksi.</br>
<pre>
<?php
$nama_barang = "";
if(isset($_POST["nama_barang"]))
	$nama_barang = $_POST["nama_barang"];
	
include "koneksi.php";
$sql = "select * from hitung";
$hasil = mysqli_query($kon, $sql);
if(!$hasil)
	die("Gagal query..". mysqli_error($kon));
?>
<embed src="animasi.gif" align="right">
   <form action="" method="post">
<table border="1">
	<tr>
	<th>Nama Barang</th>
	<th>PPN</th>
	<th>Rate Pajak</th>
	<th>Harga Bruto</th>
	<th>PPH22</th>
	</tr>
	<?php
		$no = 0;
		while($row = mysqli_fetch_assoc($hasil)){
			echo " <tr> ";
			echo " <td> ".$row['nmbarang']." </td> ";
			echo " <td> ".$row['ppn']." </td> ";
			echo " <td> ".$row['ratepajak']." </td> ";
			echo " <td> ".$row['hargabruto']." </td> ";
			echo " <td> ".$row['pph22']." </td> ";
			echo " </tr> ";
		}
	?>
</table>
</pre></form>
</h1>

</body>
<?php include_once ('template_bawah.php') ; ?>