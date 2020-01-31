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
    <h6><a href="bantuan.php">Help</a> / Lupa Password</h6>
    <h4 class="font-weight-bolder">Cara lupa password User</h4>

    <p>Lupa Password adalah fitur untuk pelanggan yang lupa password, link untuk mereset password akan dikirim jika pelanggan ingat pada email/username yang dicantumkan pada web saat pendaftaran akun. Jika tidak ingat dan pelanggan menghubungi admin maka admin diharuskan memberitahukan email atau username pelanggan tersebut untuk melakukan pemulihan password, dikarenakan admin juga tidak tahu password apa yang digunakan oleh pelanggan demi menjaga privasi pelanggan.</p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/User Lupa Password.png" alt="userlogin">

    </section>
</div>