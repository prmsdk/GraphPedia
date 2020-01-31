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
    <h6><a href="bantuan.php">Help</a> / Nego</h6>
    <h4 class="font-weight-bolder">Cara mendaftar sebagai User</h4>

    <p>Fitur Nego dikembangkan agar pelanggan dapat melakukan nego harga dengan Admin, Jika pelanggan menekan Nego maka akan diarahkan ke Halaman Nego, Pelanggan diminta untuk memasukkan harga nego, tidak kurang dari 80% total harga pesanan. Lalu admin diharuskan menghubungi pelanggan melalui email ataupun nomor telepon, jika telah terjadi kesepakatan antara pelanggan dan admin, maka Admin dapat melakukan verifikasi harga yang disetujui, tidak kurang dari 50% harga total pesanan. Setelah itu, pelanggan dapat membayar pesanan sesuai harga yang telah disepakati dengan admin dan akan berlanjut seperti pemesanan biasa. Berikut detail tampilannya :</p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/User Nego Pesan.png" alt="userlogin">

    <p class="text-center">Halaman Nego Pesanan, memasukkan harga nego terhadap pesanan.</p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/User Nego.png" alt="userlogin">

    <p class="text-center">Halaman Tabel Daftar Nego yang sedang/telah dilakukan oleh User.</p>

    </section>
</div>