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
    <h6><a href="bantuan.php">Bantuan</a> / Admin</h6>
    <h4 class="font-weight-bolder">Cara mengelola akun Admin</h4>
    <p>Halaman ini diperuntukkan untuk mengelola akun admin, hanya Super Admin yang dapat mengakses halaman ini, dikarenakan dapat memanipulasi/mengelola akun admin lainnya. Berikut adalah penjelasannya :</p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/master_admin.jpg" alt="userlogin">

    <p>
      <ol>
        <li>Jika ingin melakukan perubahan terhadap data admin, maka pilih admin.</li>
        <li>Jika ingin menambah data admin maka klik button tambah data</li>
        <li>Jika ingin mengedit data admin, maka klik button edit (pensil)</li>
        <li>Jika ingin menghapus data maka admin, maka klik button hapus (sampah)</li>
      </ol>
    </p>
  </section>
</div>

<?php
  require 'includes/footer.php';
?>