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
    <h6><a href="bantuan.php">Help</a> / Profil User</h6>
    <h4 class="font-weight-bolder">Cara mendaftar sebagai User</h4>

    <p>Setting profil berguna untuk mengatur segala sesuatu yang berhubungan dengan profil pelanggan, diantaranya Nama, Nomor Telepon, Email, Alamat dan Username. Berikut detailnya :</p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/User Profile.png" alt="userlogin">

    </section>
</div>