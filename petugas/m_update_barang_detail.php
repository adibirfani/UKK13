<?php
//ambil koneksi
include"../config.php";

//terima data dari v_detail_penjualan.php
$id_detail_penjualan =
$_POST['id_detail_penjualan'];
$id_barang = $_POST['id_barang'];
$id_pelanggan =$_POST['id_pelanggan'];

//update barang di tb_detail_penjualan.php
$sql = mysqli_query($koneksi,"UPDATE tb_detail_pejualan SET id_barang='$id_barang'WHERE id_detail_penjualan='$id_detail_penjualan'");

//kembali ke halaman m_update_barang_detail.php
header("location:m_update_barang_detail.php? id_pelanggan=$id_pelanggan");