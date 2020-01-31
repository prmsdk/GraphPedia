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
    <h6><a href="bantuan.php">Bantuan</a> / Notifikasi</h6>
    <h4 class="font-weight-bolder">Cara melihat seluruh Notifikasi</h4>
    <p>Untuk melihat semua notifikasi yang masuk yang masuk anda dapat membuka menu “Pemesanan” kemudian pilih menu “Notifikasi”, disana akan menampilkan semua pemberitahuan tentang pesanan yang masuk, pada bagian status anda dapat mengetahui notifikasi tersebut sudah dibaca atau belum dibaca, dan anda dapat merubah semua status sudah dibaca dengan menekan tombol yang ada pada disebelah kanan atas bertuliskan “Tandai semua Sedah Dibaca” atau tombol seperti ini <img height="30px" src="bantuan/img/icon_tandaidibaca.png" alt="tandaidibaca"> . Untuk membaca notifikasi anda dapat menekan tombol detail yang ada pada setiap notifikasi, seperti tombol ini <img height="30px" src="bantuan/img/info.png" alt=""> .</p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/Admin Notifikasi.png" alt="userlogin">
  </section>
</div>

<?php
  require 'includes/footer.php';
?>