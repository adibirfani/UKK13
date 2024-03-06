<?php
//ambil koneksi
include "../config.php";

//ambil data id_barang dari URL
$id_pelanggan = $_GET['id_pelanggan'];


//hapus barang berdasarkan id_pelanggan 
$sql = mysqli_query($koneksi, "DELETE FROM tb_pelanggan WHERE id_pelanggan='$id_pelanggan'");


//hapus barang berdasarkan id_pelanggan 
$sql = mysqli_query($koneksi, "DELETE FROM tb_pelanggan WHERE id_pelanggan='$id_pelanggan'");



//jika berhasil kembali ke ppenjualan_select.php
if ($sql) {
  header('location: penjualan_select.php');
}
