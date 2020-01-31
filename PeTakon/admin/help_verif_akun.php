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
    <h6><a href="bantuan.php">Help</a> / Verifikasi Akun</h6>
    <h4 class="font-weight-bolder">Cara mendaftar sebagai User</h4>

    <p>Verifikasi Akun adalah cara agar kami sebagai admin dapat memastikan bahwa email yang dicantumkan oleh pelanggan adalah email yang benar dan masih aktif. Bagi pelanggan mengaktivasi akunnya akan memberikan akses agar dapat menikmati fitur Nego yang disediakan. Cara aktivasi akun, adalah menuju ke Profil User dan akan tombol "Aktivasi Akun" dibagian bawah atau cek email User mungkin telah dikirim email pada Email yang User cantumkan</p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/User Aktivasi.png" alt="userlogin">

    <p>Jika akun pelanggan belum aktif, akan tampil halaman seperti diatas. Pelanggan dapat menekan tombol “Aktifasi akun” lalu akan dikirim Email kepada email pelanggan yang tercantum. Pelanggan dapat menekan tombol yang terdapat pada Email dan secara otomatis akun akan teraktifasi.</p>

    </section>
</div>