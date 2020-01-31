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
    <h6><a href="bantuan.php">Help</a> / Login</h6>
    <h4 class="font-weight-bolder">Cara login sebagai User</h4>

    <p>Login ditampilkan dalam bentuk Pop-up, dapat diakses dari halaman mana saja, dan ketika berhasil login akan kembali ke halaman utama. Validasi login cukup sederhana, jika anda memasukkan username dengan ‘@’ maka akan di deteksi sebagai user/pelanggan, jika tidak dideteksi sebagai admin. Login memiliki 2 fitur yaitu tampilkan password dan lupa password. “Belum ada aku?” akan mengarah ke formulir pendaftaran akun.</p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/User Login.png" alt="userlogin">

    </section>
</div>

<?php
  require 'includes/footer.php';
?>