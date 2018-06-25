<?php include_once ('template_atas.php'); ?>
<body><h1>Tarif PPH 22 Hasil Produksi:</h1>
	<h1>
    <form action="barang.php" method="post">
	PPH 22 Hasil produksi adalah pajak yang dikenakan untuk barang hasil produksi.</br>
<pre>
<?php
$nama_barang = "";
if(isset($_POST["nama_barang"]))
	$nama_barang = $_POST["nama_barang"];
	
include "koneksi.php";
$sql = "select * from barang where nmbarang like '%".$nama_barang."%' order by idbarang desc";
$hasil = mysqli_query($kon, $sql);
if(!$hasil)
	die("Gagal query..". mysqli_error($kon));
?>
   <form action="barang.php" method="post">
<table border="1">
	<tr>
	<th>Nama Barang</th>
	<th>PPN</th>
	<th>Rate Pajak</th>
	<th>Harga Bruto</th>
	</tr>
	<?php
		$no = 0;
		while($row = mysqli_fetch_assoc($hasil)){
			echo " <tr> ";
			echo " <td> ".$row['nmbarang']." </td> ";
			echo " <td> ".$row['ppn']." </td> ";
			echo " <td> ".$row['ratepajak']." </td> ";
			echo " <td> ".$row['hargabruto']." </td> ";
			echo " <td> ";
			echo " <a href='barang.php?idbarang=" . $row['idbarang'] . " '> HITUNG </a>";
			echo " </td> ";
			echo " </tr> ";
		}
	?>
</table>
</pre></form>
</h1>
</body>
<?php include_once ('template_bawah.php') ; ?>