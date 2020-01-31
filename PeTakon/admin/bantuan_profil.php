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
    <h6><a href="bantuan.php">Bantuan</a> / Profil</h6>
    <h4 class="font-weight-bolder">Cara mengatur Profil admin</h4>
    <p>Untuk merubah profil, anda dapat membuka menu “Setting” kemudian pilih menu “Profile”, untuk merubah cover anda dapan menekan tombol <img src="bantuan/img/icon_edit.png" alt="edit" height="30px"> yang berada pada pojok kanan baawah bagian cover, sama halnya jika ingin merubah foto profil tekan tombol yang sama pada bagian pojok kanan bawah pada bagian foto profil, kemudian anda merubah informasi profil seperti “Nama Usaha”, “Email”, “Nomer HP”, “Nomer Telepon”, “Alamat”, “Deskripsi”, “Username”. Jika anda telah selesai merubah profil anda, klik tombol yang berada di pojok kanan halaman yaitu tombol “Simpan” seperti tombol ini <img src="bantuan/img/icon_simpan.png" alt="simpan" height="30px"> . </p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/Admin Profile.png" alt="userlogin">

  </section>
</div>

<?php
  require 'includes/footer.php';
?>