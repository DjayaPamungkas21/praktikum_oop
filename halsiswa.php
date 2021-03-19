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
        <h1 class="mt-4">Halaman Siswa</h1>
        <a href="" class="btn btn-primary mt-3"></a>
        <div class="row">
            div.col-3
          <table class="table mt-3 mr-3 ml-3">
              <thead class="table bg-success">
                    <th>No</th>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Action</th>
              </thead>
              <tbody>
                    <tr>
                        <td>1</td>
                        <td>0110120007</td>
                        <td>Djaya Pamungkas</td>
                        <td>
                            <a href="" class=""></a>
                            <a href="" ></a>

                        </td>
                    </tr>
              </tbody>
          </table>
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