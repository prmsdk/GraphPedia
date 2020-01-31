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
    <h6><a href="bantuan.php">Bantuan</a> / Antrian-History</h6>
    <h4 class="font-weight-bolder">Cara Melihat Antrian/History Pesanan</h4>
    <p>Untuk melihat antrian yang masuk anda dapat membuka menu “Pemesanan”&nbsp; kemudian pilih menu “Antrian” atau "History" disana anda dapat melihat semua antrian pesanan yang masuk dalam web tersebut, berikut detailnya :<br></p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/Admin Antrian.png" alt="userlogin">

  </section>
</div>

<?php
  require 'includes/footer.php';
?>