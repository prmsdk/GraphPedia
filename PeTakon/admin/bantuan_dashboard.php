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
    <h6><a href="bantuan.php">Bantuan</a> / Dashboard</h6>
    <h4 class="font-weight-bolder">Halaman Utama / Dashboard Admin</h4>
    <p>Setelah anda masuk ke halaman utama <em>admin </em>tampil pertama kali yang akan muncul adalah <em>dashboard </em>serta beberapa menu yang berada di samping kiri, dan juga terdapat notofikasi dan pesan yang berada di atas. Untuk lengkapnya silahkan simak penjelasan dibawah ini.</p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/Admin Dashboard.png" alt="userlogin">

    <ol>
      <li> Pesan, </li>
      <li>Notif, pemberitahuan seluruh informasi terkait pemesanan baru maupun informasi yang berhubungan dengan pesanan</li>
      <li>Dashbord, menampilkan seluruh informasi terkait pemasanan menggunakan aplikasi web ini</li>
      <li>Pemesanan, seluruh informasi terkait dengan traksaksi pemesanan mulai dari, Antrian, History, Notifikasi, Nego</li>
      <li>Seting</li>
      <li>Master</li>
      <li>Laporan</li>
    </ol>
  </section>
</div>

<?php
  require 'includes/footer.php';
?>