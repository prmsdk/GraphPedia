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
    <h6><a href="bantuan.php">Help</a> / Halaman Produk</h6>
    <h4 class="font-weight-bolder">Cara User melihan detail Produk</h4>

    <p>Halaman produk menampilkan Gambar produk dengan kapasitas yang besar agar pelanggan dapat melihat gambar produk lebih detail. Halaman produk juga menampilkan Nama, Deskripsi dan Keterangan Harga yang semuanya dapat diatur dan dimodifikasi melalui Web Admin. Sebagai tambahan Halaman Produk juga menampilkan contact person pada bagian atas agar pelanggan dapat segera menghubungi admin jika perlu.</p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/User Produk Pilih.png" alt="userlogin">

    <p>Kedua tombol yang tampil pada halaman produk memiliki fungsi tersendiri, tombol kembali akan mengarahkan pelanggan ke halaman utama pada  bagian “Produk Kami” dan tombol “Pesan Sekarang” akan mengarahkan pelanggan ke Halaman Pemesanan.</p>

    </section>
</div>