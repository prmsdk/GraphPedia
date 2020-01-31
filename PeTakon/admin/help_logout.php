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
    <h6><a href="bantuan.php">Help</a> / Logout</h6>
    <h4 class="font-weight-bolder">Cara keluarkan akun (logout)</h4>

    <p>Pelanggan dapat melakukan logout dengan menekan tombol “Logout” pada pop-up tombol foto profil atau akan otomatis logout beberapa saat ketika pelanggan menutup browsernya.</p>

    </section>
</div>