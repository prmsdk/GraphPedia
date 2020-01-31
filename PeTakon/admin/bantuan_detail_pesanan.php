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
    <h6><a href="bantuan.php">Bantuan</a> / Detail Pesanan</h6>
    <h4 class="font-weight-bolder">Cara melihat detail Pesanan</h4>
    <p>Untuk melihat detail dari pesanan pelanggan anda dapat menakan tombol yang berada pada bagian paling kanan pada setiap pesanan, tombol seperti ini <img width="30px" class="img-fluid" src="bantuan/img/info.png" alt="info"> pada halaman Antrian, History atau Notifikasi . Setelah detail pesanan telah muncul anda dapat mencetak detail pesanan tersebut dengan menakan tombol seperti gambar printer yang berada pada disebelah kanan pada tulisan ‘Detail Pesanan’, tombol tersebut bergambarkan seperti ini <img width="30px" class="img-fluid" src="bantuan/img/icon_print.png" alt="print"></p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/Admin Pesanan Detail.png" alt="userlogin">
  </section>
</div>

<?php
  require 'includes/footer.php';
?>