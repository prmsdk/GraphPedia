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
    <h6><a href="bantuan.php">Bantuan</a> / Produk</h6>
    <h4 class="font-weight-bolder">Cara mengelola Produk</h4>
    <p>Halaman ini berguna untuk mengelola master produk, namun sebelum anda menambah produk, anda diharuskan terlebih dahulu menyiapkan Gambar, Warna, Ukuran dan Bahan yang akan dipakai pada Produk yang akan anda tambahkan. Berikut penjelasannya :</p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/master_produk.jpg" alt="userlogin">

    <p>
      <ol>
        <li>Nomor 1, jika ingin melakukan perubahan pada data produk maka klik master produk</li>
        <li>Nomor 2, jika ingin menambah data produk maka klik button tambah data&nbsp;</li>
        <li>Nomor 3, jika ingin melihat detail produk maka klik button detail&nbsp;</li>
        <li>Nomor 4, jika ingin menghapus data produk maka klik button hapus (sampah)</li>
        <li>Nomor 5, jika ingin mengedit data produk maka klik button edit (pensil)</li>
        <li>Nomor 6, jika ingin mencetak data produk, maka klik button print</li>
      </ol>
    </p>
  </section>
</div>

<?php
  require 'includes/footer.php';
?>