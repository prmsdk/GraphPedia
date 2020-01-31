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
    <h6><a href="bantuan.php">Bantuan</a> / Portfolio</h6>
    <h4 class="font-weight-bolder">Cara mengatur Portfolio</h4>
    <p>Untuk menambahkan atau merubah Promo/Slider, anda dapat membuka menu “Setting” kemudian pilih menu “Portofolio”. Untuk menambahkan data Portofolio anda dapat mengeklik tombol “Tambah Data” <img src="bantuan/img/icon_tambah.png" alt="icon" height="30px"> , setelah itu anda diminta untuk mengisi data yaitu, “Judul” anda dapat menambahkan judul tentang portofolio yang anda akan tambahkan, “Deskripsi” anda dapat menambahkan deskripsi mengenai portofolio yang akan ditambahkan, kemudian anda dapat mengunggah foto atau gambar portofolio yang anda telah siapkan dengan ukuran 1170x500px dan file dalam format .jpg .jpeg .png max ukuran 10mb. jika semua telah diisi maka anda hanya perlu mengeklik tombol “Simpan” <img src="bantuan/img/icon_simpan.png" alt="icon" height="30px"> , promo yang telah anda tambahkan akan ditambahkan di data promo dan tampil di halaman utama user. .</p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/Admin Portfolio.png" alt="userlogin">

    <p>Untuk merubah data yang telah ada, anda hanya peru tentukan portofolio yang akan dirubah kemudian tekan tombol edit seperti ini <img src="bantuan/img/icon_edit.png" alt="icon" height="30px"> , setelah anda menekan tombol tersebut akan muncul informasi dari portofolio. kemudian anda dapat merubahnya sesuai yang ana inginkan muali dari judul, deskripsi, serta gambar, setelah anda merubahnya anda dapat menekan tombol “Simpan” <img src="bantuan/img/icon_simpan.png" alt="icon" height="30px"> atau jika anda ingin membatalkannya tekan tombol “Close” <img src="bantuan/img/icon_close.png" alt="icon" height="30px"> . untuk menghapus portofolio yang telah ada anda dapat menghapusnya dengan menekan tombol hapus seperti tombol ini 	</p>
  </section>
</div>

<?php
  require 'includes/footer.php';
?>