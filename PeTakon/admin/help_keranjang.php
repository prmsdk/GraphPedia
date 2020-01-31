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
    <h6><a href="bantuan.php">Help</a> / Keranjang</h6>
    <h4 class="font-weight-bolder">Cara User mengelola keranjang pesanan</h4>

    <p>Fitur Keranjang dikembangkan agar pelanggan dapat melakukan pemesanan lebih dari 1 produk sekaligus. Pelanggan dapat mengakses keranjang dari manapun, dengan menekan tombol ikon keranjang dibagian kanan atas. Angka disamping tombol keranjang memberikan tanda berapa banyak pesanan yang terdapat pada keranjang. Jika tombol keranjang ditekan maka akan memunculkan pop-up sebagai berikut:</p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/User Keranjang.png" alt="userlogin">

    <p>Detail pesanan dapat dilihat terlebih dahulu dalam keranjang, dalam gambar diatas, pelanggan memesan Brosur dengan property warna Full Color (Dua Muka), bahan AP 100 gr, ukuran A4, sejumlah 655pcs dengan total harga pesanan Rp. 306.125,00. Pelanggan dapat melanjutkan pembayaran dengan menekan tombol “Bayar Sekarang” agar menuju ke Halaman Pembayaran.</p>
    </section>
</div>