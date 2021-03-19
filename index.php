<!DOCTYPE html>
<html lang="en">

<?php
  require('head.php');

?>

<body>

  <div class="d-flex" id="wrapper">

   <?php
      include('./layout/sidebar.php');

   ?>

    <!-- Page Content -->
    <div id="page-content-wrapper">


      <?php
        include('./layout/navbar.php');
      ?>

      

      <div class="container-fluid">
        <h1 class="mt-4">Halaman Dashboard</h1>
        <div class="row">
          <div class="col-3">
              <div class="card mt-3">
                <div class="card-body bg-success text-white">
                    <p class="font-weight-bold">Jumlah Siswa</p>
                    <p><i class="fa fa-user"></i>30 orang</p>
                </div>
              </div>
          </div>

          <div class="col-3">
              <div class="card mt-3">
                <div class="card-body bg-primary text-white">
                    <p class="font-weight-bold">Jumlah Kelas</p>
                    <p><i class="fa fa-graduation-cap"></i>5 Ruang</p>
                </div>
              </div>
          </div>

          <div class="col-3">
              <div class="card mt-3">
                <div class="card-body bg-success text-white">
                    <p class="font-weight-bold">Jumlah Guru</p>
                    <p><i class="fa fa-user"></i>30 orang</p>
                </div>
              </div>
          </div>

          <div class="col-3">
              <div class="card mt-3">
                <div class="card-body bg-success text-white">
                    <p class="font-weight-bold">Jumlah Siswa</p>
                    <p><i class="fa fa-user"></i>30 orang</p>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <?php

    require('script.php');

  ?>

</body>

</html>
