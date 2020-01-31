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
    <h6><a href="bantuan.php">Bantuan</a> / User</h6>
    <h4 class="font-weight-bolder">Cara mengelola akun User</h4>
    <p>Halaman ini dutujukan untuk mengelola akun User, namun Admin tetap tak akan bisa mengetahui password user bahkan jika dilihat langsung ke Database demi menunjang privasi dan keamanan User. Berikut penjelasannya:</p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/master_user.jpg" alt="userlogin">

    <p>
      <ol>
        <li>Nomor 1, apabila ingin melakukan perubahan terhadap data user, maka pilih user</li>
        <li>Nomor 2, apabila ingin menambah data user maka klik button tambah data</li>
        <li>Nomor 3, jika ingin mengedit data user maka klik button edit (pensil)&nbsp;</li>
        <li>Nomor 4, jika ingin menghapus data user maka klik button hapus (sampah)&nbsp;</li>
        <li>Nomor 5, jika ingin mencetak data user maka klik&nbsp; button print (cetak)</li>
      </ol>
    </p>
  </section>
</div>

<?php
  require 'includes/footer.php';
?>