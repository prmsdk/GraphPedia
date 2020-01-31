<?php
  session_start();

  $_SESSION['active_link'] = 'setting';
  include 'includes/config.php';
  include 'includes/header.php';
  if(!isset($_SESSION['admin_login'])){
    header_remove();
    header("location:index.php");
  }
?>

<div class="container row justify-content-center text-justify">
  <section class="col-10">
    <h6><a href="bantuan.php">Bantuan</a> / Rekening</h6>
    <h4 class="font-weight-bolder">Cara mengelola rekening Admin</h4>
    <p>Halaman ini ditujukan untuk mengelola rekening Admin, hanya Super Admin yang dapat mengakses halaman ini karena bersifat privat dan bersifat pribadi. Berikut penjelasannya :</p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/master_rekening.jpg" alt="userlogin">

    <p>
      <ol>
        <li>Nomor 1, jika ingin melakukan perubahan pada data rekening maka pilih rekening</li>
        <li>Nomor 2, jika ingin menambah data rekening maka pilih button tambah data</li>
        <li>Nomor 3, jika ingin mengedit data rekening maka pilih&nbsp; button edit (pensil)</li>
        <li>Nomor 4, jika ingin menghapus data rekening maka pilih button hapus (sampah)</li>
      </ol>
    </p>
  </section>
</div>

<?php
  require 'includes/footer.php';
?>