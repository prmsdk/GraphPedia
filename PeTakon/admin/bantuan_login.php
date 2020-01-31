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
    <h6><a href="bantuan.php">Bantuan</a> / Login</h6>
    <h4 class="font-weight-bolder">Cara Login Admin</h4>
    <p>Ketika erlebih dahulu URL/Alamat web yang telah didaftarkan, jika sudah masuk ke halaman utama silahkan klik tombol login yang ada di pojok kanan atas, setelah itu akan muncul pop up login seperti dibawah ini :</p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/User Login.png" alt="userlogin">

    <p>Setelah muncul pop up seperti itu silahkan masukan USERNAME dana PASSWORD yang telah didaftarkan atau secara defaultnya adalah USERNAME : admin dan PASSWORD : admin. Setelah itu akan langsung diarahkan ke halaman utama admin.</p>
  </section>
</div>

<?php
  require 'includes/footer.php';
?>