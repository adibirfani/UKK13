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

    <!-- Testimonials header -->
    <section class="row" id="tmServices">
          <div class="col-12">
            <div class="parallax-window tm-services-parallax-header tm-testimonials-parallax-header"
                 data-parallax="scroll"
                 data-z-index="101"
                 data-image-src="../img/ice-mountain.jpg">

                 <div class="tm-bg-info-transparent text-center tm-services-header tm-testimonials- text-uppercase">
                    <h2 class="text-uppercase tm-services-page-title tm-testimonials-page-title">Data username dan passwor</h2>
                    <p class=" mb-0 small">
                    <a href="registrasi_insert_v.php" class="nav-link btn btn btn-dark custom-btn custom-border-btn btn m-4">registrasi</a>
                    <table class="table table-striped-columns text-white ">
                        <thead class="table-success text-secondary">
                            <th>id</th>
                            <th>nama</th>
                            <th>username</th>
                            <th>password</th>
                            <th>ststus</th>
                            <th>aksi</th>
                        </thead>
                        <tbody class="table table-striped-column text-uppercase">
                                    <?php 
                                    include('../config.php');
                                    $sql = mysqli_query($koneksi, "SELECT * FROM tb_login");
                                    foreach($sql as $pengguna){
                                    ?>
                            <thead  >
                                <th><?= $pengguna['id_login'] ?></th>
                                <th><?= $pengguna['nama'] ?></th>
                                <th><?= $pengguna['username_login'] ?></th>
                                <th><?= $pengguna['password_login'] ?></th>
                                <th><?= $pengguna['status'] ?></th>
                                <th><a href="registrasi_update_v.php?id_login=<?= $pengguna['id_login']?>"  class=" btn btn-outline-primary mt-2">update</a></td>
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