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
    <h6><a href="bantuan.php">Help</a> / Verifikasi Bukti Transfer</h6>
    <h4 class="font-weight-bolder">Cara User mengunggah bukti transfer</h4>

    <p>Halaman Verif Bukti TF akan tampil setelah anda menekan tombol Bayar pada Halaman Pembayaran, atau pelanggan dapat mengakses halaman ini dengan menekan tombol “Upload Bukti TF” pada halaman Detail Pesanan sebagai berikut :</p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/User Detail Pesanan.png" alt="userlogin">

    <p>Berikut adalah tampilan upload Bukti TF :</p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/User Verifikasi Pembayaran.png" alt="userlogin">

    </section>
</div>