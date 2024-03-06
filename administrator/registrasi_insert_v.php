<?php
include('header.php');
include('inavbar.php');
?>



<section class="row tm-testimonials-section " id="section_6">
            <div class="container">
                <div class="row">

                    
                    <div class="col-lg-5  mx-auto">
                        <form class="col-lg-15 tm-bg-white-drak-" action="registrasi_insert_m.php" method="post" role="form">
                            <h2>Registrasi</h2>

                            <table class="table text-white-50 bg-dark">
                                <tbody>
                                    <thead>
                                        <th><input type="text" name="nama" id="last-name" class="form-control" placeholder="nama" required></th>
                                    </thead>
                                    <thead>
                                        <th><input type="text" name="username" id="email" class="form-control" placeholder="username" required></th>
                                    </thead>
                                    <thead>
                                        <th><input type="password" name="password" id="email" class="form-control" placeholder="password" required></th>
                                    </thead>
                                    <thead>
                                        <th>
                                            <select name="status" style="width: 250px; height: 50px;">
                                                    <option value="Administrator">Administrator</option>
                                                    <option value="Petugas">Petugas</option>
                                            </select>
                                        </th>
                                    </thead>
                                    <thead>
                                        <th></th>
                                        <th class=""><button type="submit" class=" btn btn-primary">submit</button></th>
                                        <th></th>
                                    </thead>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
</section>                                  
                        
                  
<?php
include('footer.php');
?>    
