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
?>