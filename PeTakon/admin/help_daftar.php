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
    <h6><a href="bantuan.php">Help</a> / Register</h6>
    <h4 class="font-weight-bolder">Cara mendaftar sebagai User</h4>

    <p>Halaman Register/Daftar Akun berfungsi untuk pelanggan melakukan pendaftaran akun, pelanggan harus melakukan pendaftaran sebelum bisa login ataupun melakukan pemesanan. Formulir pendaftaran yang harus diisi adalah Nama Lengkap, Alamat Email, Nomor Telepon, Username dan Password. Pelanggan harus menyetujui kebijakan & privasi yang terdapat pada web. Ketika pelanggan telah melakukan pendaftaran, Web akan mengirimkan email verifikasi akun secara automatis kepada alamat email pelanggan. Pelanggan yang telah terdaftar pada database Web dapat dilihat pada Web Admin di menu Master -> User.</p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/User Register.png" alt="userlogin">

    </section>
</div>

<?php
  require 'includes/footer.php';
?>