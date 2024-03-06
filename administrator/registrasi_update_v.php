<?php
include('header.php');
include('inavbar.php');
include ('../config.php');

$id = $_GET['id_login'];

$sql = mysqli_query($koneksi, "SELECT * FROM tb_login  WHERE id_login='$id'");

$pengguna = mysqli_fetch_assoc($sql);

?>

<section class="row tm-testimonials-section " id="section_6">
            <div class="container">
                <div class="row">

                    
                    <div class="col-lg-5  mx-auto">
                        <form class="col-lg-15 tm-bg-white-drak-" action="registrasi_update_m.php" method="post" role="form">
                            <h2>Registrasi</h2>
                            <input type="hidden" name="id" value="<?= $pengguna['id_login'] ?>">

                            <table class="table text-white-50 bg-dark">
                                <tbody>
                                    <thead>
                                        <th><input type="text" name="nama" id="last-name" class="form-control" placeholder="nama" value="<?= $pengguna['nama'] ?>" required></th>
                                    </thead>
                                    <thead>
                                        <th><input type="text" name="username" id="email" class="form-control" placeholder="username" value="<?= $pengguna['username_login'] ?>" required></th>
                                    </thead>
                                    <thead>
                                        <th><input type="password" name="password" id="email" class="form-control" placeholder="password" value="<?= $pengguna['password_login'] ?>" required></th>
                                    </thead>
                                    <thead>
                                        <th><select name="status" id="" class="form-control" required>
                                <?php
                                if ($pengguna['status'] == "Administrator") {
                                    echo "<option value='Administrator' selected>Administrator</option>";
                                    
                                }else{
                                    echo "<option value='Administrator' selected>Administrator</option>";
                                }
                                if ($pengguna['status'] == "petugas") {
                                    echo "<option value='petugas' selected>petugas</option>";
                                    
                                }else{
                                    echo "<option value='petugas' selected>petugas</option>";
                                }
                                    ?>
                            </select>
                                        </th>
                                    </thead>
                                    <thead>
                                        <th></th>
                                        <th class=""><button type="submit" class=" btn btn-primary">login</button></th>
                                        <th></th>
                                    </thead>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
</section>                                  
                       

<!-- 

<?php
include('footer.php');
?>    
