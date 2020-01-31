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
    <h6><a href="bantuan.php">Help</a> / Notifikasi</h6>
    <h4 class="font-weight-bolder">Cara mendaftar sebagai User</h4>

    <p>Fitur Notifikasi dikembangkan untuk memudahkan pelanggan dalam melihat status pesanan miliknya, tanpa harus menuju ke Halaman History. Tombol notifikasi berada disebelah tombol Keranjang. Tampilan Halaman Notifikasi sebagai berikut :</p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/User Notification Modal.png" alt="userlogin">
    
    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/User Notification.png" alt="userlogin">

    </section>
</div>