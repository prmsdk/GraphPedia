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
    <h6><a href="bantuan.php">Help</a> / Pembayaran</h6>
    <h4 class="font-weight-bolder">Cara User melakukan pembayaran</h4>

    <p>Halaman Pembayaran menampilkan detail pesanan, jumlah pesanan dan total pembayaran. Pelanggan diminta memilih Bank yang tersedia. Bank yang tampil pada halaman pembayaran dapat diatur pada Web Admin. Setelah pelanggan menekan tombol “Bayar” maka pesanan akan disimpan ke database dan pelanggan akan dialihkan ke Halaman Verifikasi Bukti TF.</p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/User Pembayaran.png" alt="userlogin">

    </section>
</div>