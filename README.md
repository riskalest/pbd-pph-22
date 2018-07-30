= KalkulatorPPh22 =

*Pokok Masalah* 

Membangun aplikasi perhitungan pph pasal 22 atas Penjualan Hasil Produksi

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
* Database server yang digunakan adalah Mysql

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
* Memebuat form untuk perhitungan serta membuat template
  ## barang.php
  ## style.php
  ## template_atas.php
  ## template_bawah.php

== 21 Mei 2018 ==

* Memasukkan data perhitungan PPN 22 ke database
  ## simpan_barang.php
* Menambah tombol simpan pada file barang
  ## barang.php

== 28 Mei 2018 ==

* Mengatur CSS
  ## atyle.css
* Menambah link menu 
  ## pph22.php 
  ## template_atas.php

== 04 Juni 2018 ==

* Menghitung PPH 22
  ## barang.php
* Mengambil data dari database
  ## ratepajak.php


== 25 Juni 2018 ==

* Menghitung PPH 22
  ## barang.php
  ## simpan.php
  ## proses_barang.php
  ## barang_simpan.php
  
* Mengambil data dari database
  ## ratepajak.php
  
* Menambahkan animasi tampilan web
  ## animasi.gif
  ## kalkulator.gif

* Menambah tabel untuk menyimpan data perhitungan
  ## koneksi.php
  
* Mengambil data seluruh perhitungan yang telah dilakukan dari database untuk laporan 
  ## laporan_perhitungan.php
  
  == 02 Juli 2018 ==

* Menghitung PPH 22
  ## barang.php
  ## simpan.php
  ## proses_barang.php
  ## barang_simpan.php
  
  
  == 30 Juli 2018 ==

* Mengupdate program perhitungan
  ## pada program yang diupdate ini saya menggunakan php, dengan boostrap, serta javascript. Sehingga saya menambahkan file : 
  ## jquery.min
  ## serta folder boostrap
