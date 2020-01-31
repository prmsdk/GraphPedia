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
    <h6><a href="bantuan.php">Help</a> / Pemesanan</h6>
    <h4 class="font-weight-bolder">Cara User melakukan pemesanan</h4>

    <p>Halaman pemesanan menampilkan formulir pemesanan, pelanggan diminta melengkapi keseluruhan parameter yang dibutuhkan untuk melakukan pemesanan. Harga akan tertera secara otomatis berdasarkan parameter yang telah dimasukkan. Pelanggan yang telah mengisi keseluruhan formulir pemesanan, dapat menekan salah satu tombol dibagian bawah halaman. Tombol “Kembali” untuk membatalkan pemesanan, tombol “Keranjang” untuk memasukkan pesanan ke keranjang dan memilih produk lainnya, tombol “Bayar” untuk langsung ke Halaman Pembayaran dan tombol “Nego” untuk melakukan nego harga kepada Admin.</p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/User Produk Pesan.png" alt="userlogin">

    <p>Pertama anda dapat mengunggah desain anda jika ada, selanjutnya anda diminta untuk memilih Warna, Bahan, Ukuran, Jumlah dan Metode Pembayaran.</p>

    </section>
</div>