<?php
    session_start();
    //cek session 
    if ($_SESSION['login'] != 'petugas') {
      //kembali ke halaman login
      header('location: ../index.php');
    }
    include('../config.php');
    include('header.php');
    include('inavbar.php');
    
    ?>
    <section class="tm-bg-white-transparent tm-app-feature-box   " id="section_2">
<div class=" text-center mx-auto">
            <h2 class="mb-5">Data Transaksi Pelanggan </h2>
        </div>
        
        <a href="penjualan_insert_v.php" class="nav-link custom-btn custom-border-btn btn btn btn-dark m-4">Tambah Data pelanggan</a>

        <div class="row text-warning-emphasis ">
            <div class=" col-md-11 col-md-1 m-5 mb-lg-11 mb-md-0">
            <div class="featured-block d-flex justify-content-center align-items-center">
                
                    <table class="table table-bordered border-success table-hover table-striped ">
                        <thead class="table-success">
                            <th>ID pelanggan</th>
                            <th>Nama</th>
                            <th>alamat</th>
                            <th>Telepon</th>
                            <th colspan="2">aksi</th>
                        </thead>
                        <tbody class="table-group-divider ">
                        <?php
    //ambil koneksi
    include "../config.php";
    //ambil data di tb_pelanggan
    $sql = mysqli_query($koneksi, 'SELECT * FROM tb_pelanggan ORDER BY id_pelanggan DESC');
    foreach ($sql as $pelanggan) {
    ?>
      <tr>
        <td><?= $pelanggan['id_pelanggan'] ?> </td>
        <td><?= $pelanggan['nama_pelanggan'] ?></td>
        <td><?= $pelanggan['alamat_pelanggan'] ?></td>
        <td><?= $pelanggan['telepon_pelanggan'] ?></td>
        <td><a href="penjualan_delete.php?id_pelanggan=<?= $pelanggan['id_pelanggan'] ?>"  onclick="return confirm('apakah anda yakin mau delete?');"  class=" btn  btn btn-danger ">Dalete</a></td>
        <td><a href="detail_penjualan_v.php?id_pelanggan=<?= $pelanggan['id_pelanggan'] ?>" class=" btn btn btn-info ">Transaksi</a></td>
      </tr>
    <?php } ?>
                        </tbody>
                    </table>
                </a>
            </div>
        </div>
          </section>
        
<?php 
include('footer.php');

?>