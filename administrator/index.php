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

    //hitung jumlah barang dari tb_barang
  $barang = mysqli_query($koneksi, "SELECT COUNT(*) as Jumlah FROM tb_barang");
  $jumlahBarang = mysqli_fetch_assoc($barang);

  //hitung jumlah pembelian dari tb_penjualan
  $penjualan = mysqli_query($koneksi, "SELECT COUNT(*) as Jumlah FROM tb_penjualan");
  $jumlahPenjualan = mysqli_fetch_assoc($penjualan);

  //hitung jumlah pengguna dari tb_pelanggan
  $pelanggan = mysqli_query($koneksi, "SELECT COUNT(*) as Jumlah FROM tb_pelanggan");
  $jumlahPelanggan = mysqli_fetch_assoc($pelanggan);
  
    
    ?>

<section class="row" id="tmHome">
          <div class="col-11 tm-home-container">
            <div class="text-white tm-home-left">
              <p class="text-uppercase tm-slogan"><?= $_SESSION['status']; ?></p>
              <hr class="tm-home-hr" />
              <h2 class="tm-home-title"><?= $_SESSION['nama']; ?></h2>
              <p class="tm-home-text">
                selamat datang di web ini di mohon kerjasamnya,apabila ada ke eroran di mohon langsung laparan ke tim IT : Thank you.

              </p>
            </div>
            <div class="row col-9 " id="tmFeatures">
          <div class="col-lg-4 ">
            <div class="tm-bg-white-transparent tm-feature-box">
            <h5 class="tm-feature-name">jumlah Barang </h5>
            
            <div class="tm-feature-icon-container">
                <i class="fas fa-3x ">
                <p class="text-center"><?= $jumlahBarang['Jumlah']; ?></p>  
                </i>
            </div>
            <p class="text-center">Jumlah Data nama-nama Barang yang ada di toko</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="tm-bg-white-transparent tm-feature-box">
                <h5 class="tm-feature-name">jumlah penjualan</h5>

                <div class="tm-feature-icon-container">
                    <i class="fas fa-3x ">
                    <?= $jumlahPenjualan['Jumlah']; ?>
                    </i>
                </div>
                <p class="text-center">Jumlah Data penjualan yang ada di toko</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="tm-bg-white-transparent tm-feature-box">
                <h5 class="tm-feature-name">jumlah pelanggan</h5>

                <div class="tm-feature-icon-container">
                    <i class="fas fa-3x ">
                    <?= $jumlahPelanggan['Jumlah']; ?>
                    </i>
                </div>
                <p class="text-center">Jumlah Data pelanggan yang ada di toko</p>
            </div>
          </div>
        </div>
        
            
          </div>
        </section>


       

    

                


            

        


    <?php
     




    include('footer.php');