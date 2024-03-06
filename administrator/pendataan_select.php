<?php
    session_start();
    //cek session 
    if ($_SESSION['login'] != 'admin') {
      //kembali ke halaman login
      header('location: ../index.php');
    }
    include('../config.php');
    include('header.php');
    include('inavbar.php');    
    ?>

    <section class="tm-bg-white-transparent tm-app-feature-box" id="section_2">
            <h2 class="mb-5">Daftar Pendataan Barang</h2>
        
        
        <a href="pendataan_insert_v.php" class="nav-link btn btn-outline-dark smoothscroll custom-btn  btn m-5 ">pemasukan barang</a>

        <div class="row ">
            
            <div class="featured-block d-flex justify-content-center align-items-center">
                
                    <table class="table table-bordered border-success table-hover table-striped ">
                        <thead class="table-primary">
                            <th>id</th>
                            <th>nama barang</th>
                            <th>stok</th>
                            <th>harga</th>
                            <th colspan="2" class="text-center">aksi</th>
                        </thead>
                        <tbody class="table-group-divider">
                                    <?php 
                                    include('../config.php');
                                    $sql = mysqli_query($koneksi, "SELECT * FROM tb_barang");
                                    foreach($sql as $barang){
                                    ?>
                            <tr>
                                <th><?= $barang['id_barang'] ?></th>
                                <th><?= $barang['nama_barang'] ?></th>
                                <th><?= $barang['stok_barang'] ?></th>
                                <th><?= $barang['harga_barang'] ?></th>
                                <th><a href="pendataan_update_v.php?id_barang=<?= $barang['id_barang']?>"  class="custom-btn btn  btn btn-dark mt-2">ubah</a></td>
                                <th><a href="pendataan_delete.php?id_barang=<?= $barang['id_barang']?>" onclick="return confirm('apakah anda yakin mau delete?');"  class="custom-btn btn  btn btn-danger mt-2">hapus</a></td>
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