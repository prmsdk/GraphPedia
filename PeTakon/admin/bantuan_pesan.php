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
    <h6><a href="bantuan.php">Bantuan</a> / Pesan</h6>
    <h4 class="font-weight-bolder">Cara melihat Pesan yang masuk</h4>
    <p>Untuk melihat pesan masuk, anda dapat membuka menu “Setting” kemudian pilih menu “Pesan”. Setelah anda membuka akan terdapat pesan-pesan dari user mengenai komplain, pertanyaan, masukan, dan lain-lain. Untuk melihat detail dari pesan anda dapat menekan tombol detail atau tompol seperti ini <img src="bantuan/img/info.png" alt="icon" height="30px">. setelah anda selesai membacanya anda dapat menutupnya dengan menekan tombol tutup <img src="bantuan/img/icon_tutup.png" alt="icon" height="30px">. kemudian jiak anda ingin menghapusnya dapan menekan tombol hapus <img src="bantuan/img/icon_delete.png" alt="icon" height="30px">.</p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/Admin Pesan.png" alt="userlogin">

  </section>
</div>

<?php
  require 'includes/footer.php';
?>