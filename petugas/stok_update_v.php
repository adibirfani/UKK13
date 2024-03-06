<?php
include('header.php');
include('inavbar.php');

?>





    <?php

    include ('../config.php');
$id = $_GET['id_barang'];

$sql = mysqli_query($koneksi, "SELECT * FROM tb_barang  WHERE id_barang='$id'");

$barang = mysqli_fetch_assoc($sql);
?>
<section class="tm-bg-black-transparent tm-app-feature-box" id="section_4">
<div class="col-lg-9 col-17 mx-auto">
               
               <div class="col-lg-6 col-12 mx-auto">
                   <h2 class="text-white mb-4"></h2>

                            <form class="custom-form volunteer-form mb-5 mb-lg-0" action="stok_update_m.php" method="post" role="form">
                                <h3 class="mb-4">mengupdate stok barang</h3>

                                <input type="hidden" name="id" value="<?= $barang['id_barang'] ?>">

                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <input type="text" name="nama_barang" style="color:black;" value="<?= $barang['nama_barang'] ?>" class="form-control " placeholder="nama barang" required readonly>
                                    </div>
                                    
                                    <div class="col-lg-6 col-12">
                                        <input type="text" name="harga" style="color:black;" value="<?= $barang['harga_barang'] ?>"  class="form-control" placeholder="Harga" required readonly>
                                    </div>

                                    <div class="col-lg-10 m-3">    
                                        <input type="text" name="stok" value="<?= $barang['stok_barang'] ?>" class="form-control" placeholder="stok" required>
                                    </div>


                                    
                                </div>

                                

                                <button type="submit" class="form-control btn btn-light">Submit</button>
                            </form>
                        </div>

                        
                    </div>
                </div>
            </section>
    


    <?php
include('footer.php');


?>    
