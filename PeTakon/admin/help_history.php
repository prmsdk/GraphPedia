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
    <h6><a href="bantuan.php">Help</a> / History</h6>
    <h4 class="font-weight-bolder">Cara User melihat history pesanan</h4>

    <p>Fitur History berguna untuk melihat pesanan apa saja yang telah/sedang dikerjakan. History juga mempermudah pelanggan dalam mengetahui status pesanan miliknya. Pelanggan dapat melihat detailnya dengan menekan tombol “i” yang berarti info pada bagian kanan table history.</p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/User History.png" alt="userlogin">

    </section>
</div>