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
    <h6><a href="bantuan.php">Bantuan</a> / Testimonial</h6>
    <h4 class="font-weight-bolder">Cara mengatur Testimonial</h4>
    <p>Untuk menambahkan atau merubah Testimonial, anda dapat membuka menu “Setting” kemudian pilih menu “Testimonial”. Untuk menambahkan data Testimonial anda dapat mengeklik tombol “Tambah Data” <img src="bantuan/img/icon_tambah.png" alt="icon" height="30px"> , setelah itu anda diminta untuk mengisi data yaitu, “Nama” anda dapat meengisi nama dari user yang telah memberikan testimonial, “Profesi” anda dapat mengisi juga profesi user yang telah memberikan testimonial tersebut, “Deskripsi” anda dapat mengisi testimonial yang telah disampaikan user mengenai percetakaan anda tersebut, kemudian anda dapat menambahkan foto user yang telah memberikan testimonial dengan ukuran 1170x500px dan file dalam format .jpg .jpeg .png max ukuran 10mb. jika semua telah diisi maka anda hanya perlu mengeklik tombol “Simpan” <img src="bantuan/img/icon_simpan.png" alt="icon" height="30px"> , testimonial yang telah anda tambahkan akan ditambahkan di data testimonial dan tampil di halaman utama user.</p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/Admin Testi.png" alt="userlogin">

    <p>Untuk merubah data yang telah ada, anda hanya peru tentukan testimonial yang akan dirubah kemudian tekan tombol edit seperti ini <img src="bantuan/img/icon_edit.png" alt="icon" height="30px">	, setelah anda menekan tombol tersebut akan muncul informasi dari testimonial. kemudian anda dapat merubahnya sesuai yang ana inginkan muali dari nama, profesi, deskripsi, serta foto, setelah anda merubahnya anda dapat menekan tombol “Simpan” <img src="bantuan/img/icon_simpan.png" alt="icon" height="30px"> atau jika anda ingin membatalkannya tekan tombol “Close” <img src="bantuan/img/icon_close.png" alt="icon" height="30px"> . untuk menghapus testimonial yang telah ada anda dapat menghapusnya dengan menekan tombol hapus seperti tombol ini 	.</p>
  </section>
</div>

<?php
  require 'includes/footer.php';
?>