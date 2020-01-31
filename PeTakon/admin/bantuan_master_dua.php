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
    <h6><a href="bantuan.php">Bantuan</a> / Kategori</h6>
    <h4 class="font-weight-bolder">Cara Login Admin</h4>
    <p>Halaman master kategori ada 3 yaitu Kategori Produk, Kategori Bahan dan Kategori Ukuran. Cara mengoperasikannya sangat mirip, berikut penjelasannya :</p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/master_dua.jpg" alt="userlogin">

    <p>
      <ol>
        <li>Nomor 1, apabila ingin melakukan perubahan terhadap kategori maka pilih dan klik kategori yang akan di ubah</li>
        <li>Nomor 2, apabila ingin menambah data kategori maka klik button tambah data</li>
        <li>Nomor 3, apabila ingin menghapus data kategori maka klik button hapus (sampah)</li>
      </ol>
    </p>
  </section>
</div>

<?php
  require 'includes/footer.php';
?>