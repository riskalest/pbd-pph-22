<?php
$nmbarang = $_POST['nmbarang'];
$ppn = $_POST['ppn'];
$ratepajak = $_POST['ratepajak'];
$hargabruto = $_POST['hargabruto'];

include "koneksi.php";

$sql = "insert into barang (nmbarang,ppn,ratepajak,hargabruto) values ('$nmbarang',$ppn,$ratepajak,$hargabruto)";
$hasil = mysqli_query($kon, $sql);

if(!$hasil){
	echo "Gagal Simpan, silahkan diulangi!<br />";
	echo mysqli_error($kon);
	echo "<br/> <input type='button' value='Kembali'
		onClick='self.history.back()'>";
	exit;
	}else{
		echo "Simpan data berhasil";
	}
?>