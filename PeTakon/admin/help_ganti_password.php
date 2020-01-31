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
    <h6><a href="bantuan.php">Help</a> / Ganti Password</h6>
    <h4 class="font-weight-bolder">Cara mengganti password User</h4>

    <p>Ganti password adalah fitur agar pelanggan dapat mengubah passwordnya demi keamanan. Fitur ini dapat ditemukan pada tombol “Keamanan” dalam pop-up ketika pelanggan menekan foto profil miliknya di pojok kanan atas. Pelanggan yang menekan tombol keamanan akan ditujukan ke halaman berikut untuk mengubah password :</p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/User Ganti Password.png" alt="userlogin">

    <p>Pelanggan diharuskan memasukkan password lama dan 2 kali password baru dikarenakan keamanan bagi pelanggan agar tidak dirugikan.</p>

    </section>
</div>