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
    <h6><a href="bantuan.php">Bantuan</a> / Gambar Produk</h6>
    <h4 class="font-weight-bolder">Cara mengelola Gambar Produk</h4>
    <p>Halaman master gambar produk berguna untuk mengelola gambar (thumbnail) produk yang nantinya akan ditampilkan pada Web Pelanggan, pada halaman utama dan halaman detail produk. gambar produk sangat diperlukan setidaknya 1 gambar agar mempercantik dan memperjelas tampilan produk agar Pelanggan dapat lebih percaya terhadap Produk yang akan dipesan. Berikut penjelasannya  :</p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/master_gambar.jpg" alt="userlogin">

    <p>
      <ol>
        <li>Nomor 1, apabila ingin melakukan perubahan terhadap data gambar produk, maka pilih master gambar produk</li>
        <li>Nomor 2, apabila ingin menambahkan data gambar produk maka klik button tambah data.</li>
        <li>Nomor 3, apabila ingin menghapus data gambar produk, maka klik button hapus (sampah)</li>
        <li>Nomor 4, apabila ingin mengedit data gambar produk, maka klik button edit (pensil)</li>
      </ol>
    </p>
  </section>
</div>

<?php
  require 'includes/footer.php';
?>