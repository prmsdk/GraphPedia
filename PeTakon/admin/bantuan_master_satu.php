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
    <h6><a href="bantuan.php">Bantuan</a> / Bahan-Ukuran-Warna</h6>
    <h4 class="font-weight-bolder">Cara mengelola Bahan/Ukuran/Warna</h4>
    <p>Master Bahan, Ukuran dan Warna memiliki kesamaan dalam pengoperasiannya. Ketiga master ini menjadi parameter nantinya pada halaman master Produk. Namun ketiga master ini juga memerlukan sumber agar dapat dikelola, yaitu kategori. Jadi Admin haruslah mengisi master kategori terlebih dahulu sebelum mengelola ketiga Master ini. Berikut penjelasannya :</p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/master_satu.jpg" alt="userlogin">

    <p>
      <ol>
        <li>Nomor 1, jika ingin melakukan perubahan maka klik master à master yang di pilih</li>
        <li>Nomor 2, jika ingin menambah data maka klik button tambah data&nbsp;</li>
        <li>Nomor 3, jika ingin menghapus data maka klik &nbsp;button hapus (sampah)&nbsp;</li>
        <li>Nomor 4, jika ingin mengedit data maka klik button edit (pensil)&nbsp;</li>
        <li>Nomor 5, jika ingin mencetak data maka klik button print</li>
      </ol>
    </p>
  </section>
</div>

<?php
  require 'includes/footer.php';
?>