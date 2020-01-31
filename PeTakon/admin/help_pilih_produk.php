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
    <h6><a href="bantuan.php">Help</a> / Pilih Produk</h6>
    <h4 class="font-weight-bolder">Cara memilih Produk yang akan dipesan</h4>

    <p>Pilih produk berada pada halaman utama, seperti yang dijelaskan pada poin pertama pada bagian “Produk Kami” . Terdapat Kategori, Gambar Produk, Harga Produk ter-rendah yang jika pelanggan menekan gambar atau tombol “Pesan” akan diarahkan ke Halaman Produk.</p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/home_02.jpg" alt="userlogin">

    </section>
</div>