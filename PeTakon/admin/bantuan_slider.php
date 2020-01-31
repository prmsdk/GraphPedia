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
    <h6><a href="bantuan.php">Bantuan</a> / Slider</h6>
    <h4 class="font-weight-bolder">Cara mengatur Slider / Promo</h4>
    <p>Untuk menambahkan atau merubah Promo/Slider, anda dapat membuka menu “Setting” kemudian pilih menu “Promo/Slider”. Untuk menambahkan data promo/slider anda dapat mengeklik tombol “Tambah Data” <img height="30px" src="bantuan/img/icon_tambah.png" alt="tambah">, setelah itu anda diminta untuk mengisi data yaitu, “Tombol” anda dapat memberikan nama pada tombol yang akan tampil di promo/slider, “Link” anda harus mengisi link atau alamat tersebut dengan link yang akan dituju saat kiti menekan tombol yang telah diberikan sebulumnya, link bisa didapatkan dengan cara cari terlebih dahulu halaman yang akan dituju setelah kita mekan tombol, kemudian copy atau salin link yang berada pada atas halaman contoh "https://www.abadicahayaperkasa.com/register_user.php", kemudian paste atau tempel pada kolom isi link, “Deskripsi” anda dapat menambahkan deskripsi terkait dengan promosi yang anda tawarkan, “Pilih File” anda dapat menambahkan gambaar promosi produk anda disini, file anda harus dalam format .jpg . jpeg .png dan max ukuran file 3mb, jika semua telah diisi maka anda hanya perlu mengeklik tombol “Simpan” <img height="30px" src="bantuan/img/icon_simpan.png" alt="simpan">, promo yang telah anda tambahkan akan ditambahkan di data Promo/Slider dan tampil di halaman utama user.</p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/Admin Slider.png" alt="userlogin">

    <p>
      Untuk merubah data yang telah ada, anda hanya peru tentukan promo/slider yang akan dirubah kemudian tekan tombol edit seperti ini <img height="30px" src="bantuan/img/icon_editc.png" alt="icon">, setelah anda menekan tombol tersebut akan muncul informasi dari promo/slider, kemudian anda dapat merubahnya sesuai yang anda inginkan mulai dari tombol, link, deskripsi, serta gambar, setelah anda merubahnya anda dapat menekan tombol “Simpan”	 <img height="30px" src="bantuan/img/icon_simpan.png" alt="icon"> atau jika anda ingin membatalkannya tekan tombol “Close” <img height="30px" src="bantuan/img/icon_close.png" alt="icon">. untuk menghapus promo/slider yang telah ada anda dapat menghapusnya dengan menekan tombol hapus seperti tombol ini <img height="30px" src="bantuan/img/icon_delete.png" alt="icon">.
    </p>

</div>

<?php
  require 'includes/footer.php';
?>