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

<div class="container text-dark row justify-content-center">
<section class="col-lg-11 col-md">
  <h2 class="text-left my-3 font-weight-bolder">BANTUAN</h2>
  <div class="row my-3 justify-content-center">
    <div class="col-lg-6 col-md-8">
      <h4 class="text-left">ADMIN</h4>
      <ol class="ml-n4">
        <li><a href="bantuan_login.php">Bagaimana cara login sebagai Admin?</a></li>
        <li><a href="bantuan_dashboard.php">Bagaimana cara mengakses halaman Dashboard?</a></li>
        <li><a href="bantuan_antrian.php">Bagaimana cara melihat Antrian/History pesanan yang masuk?</a></li>
        <li><a href="bantuan_detail_pesanan.php">Bagaimana cara melihat detail pesanan?</a></li>
        <li><a href="bantuan_notifikasi.php">Bagaimana cara melihat seluruh notifikasi?</a></li>
        <li><a href="bantuan_profil.php">Bagaimana cara mengatur profil admin?</a></li>
        <li><a href="bantuan_slider.php">Bagaimana cara mengatur slider / promo?</a></li>
        <li><a href="bantuan_pesan.php">Bagaimana cara melihat pesan yang masuk?</a></li>
        <li><a href="bantuan_portfolio.php">Bagaimana cara mengatur tampilan portfolio?</a></li>
        <li><a href="bantuan_testi.php">Bagaimana cara mengatur tampilan testimonial?</a></li>
        <li><a href="bantuan_master_produk.php">Bagaimana cara mengelola Produk?</a></li>
        <li><a href="bantuan_master_satu.php">Bagaimana cara mengelola Bahan/Ukuran/Warna?</a></li>
        <li><a href="bantuan_master_gambar.php">Bagaimana cara mengelola gambar produk?</a></li>
        <li><a href="bantuan_master_dua.php">Bagaimana cara mengelola kategori <br> Produk/Bahan/Ukuran?</a></li>
        <li><a href="bantuan_master_user.php">Bagaimana cara mengelola akun User?</a></li>
        <li><a href="bantuan_master_admin.php">Bagaimana cara mengelola akun Admin?</a></li>
        <li><a href="bantuan_master_rekening.php">Bagaimana cara mengelola rekening Admin?</a></li>
      </ol>
    </div>
    <div class="col-lg-6 col-md-8">
      <h4 class="text-left">USER</h4>
      <ol class="ml-n4">
        <li><a href="help_landing_page.php">Penjelasan tentang Halaman Utama bagi User/Pelanggan.</a></li>
        <li><a href="help_login.php">Bagaimana cara login sebagai User?</a></li>
        <li><a href="help_daftar.php">Bagaimana cara mendaftar sebagai User?</a></li>
        <li><a href="help_lupa_password.php">Apakah solusi jika User lupa password?</a></li>
        <li><a href="help_profil.php">Bagaimana cara User mengelola akun dan data diri?</a></li>
        <li><a href="help_verif_akun.php">Bagaimana cara User melakukan verifikasi akun?</a></li>
        <li><a href="help_ganti_password.php">Bagaimana cara User mengganti password?</a></li>
        <li><a href="help_logout.php">Bagaimana cara User keluar dari akun miliknya? (logout)</a></li>
        <li><a href="help_pilih_produk.php">Bagaimana cara User memilih produk yang akan dipesan?</a></li>
        <li><a href="help_produk_user.php">Bagaimana cara User melihat detail produk?</a></li>
        <li><a href="help_pemesanan.php">Bagaimana cara User melakukan pemesanan?</a></li>
        <li><a href="help_keranjang.php">Bagaimana cara User mengelola keranjang?</a></li>
        <li><a href="help_pembayaran.php">Bagaimana cara User melakukan pembayaran?</a></li>
        <li><a href="help_verif_bukti_tf.php">Bagaimana cara User mengunggah bukti transfer?</a></li>
        <li><a href="help_history.php">Bagaimana cara User melihat history pesanan?</a></li>
        <li><a href="help_notifikasi.php">Bagaimana cara User melihat notifikasi yang masuk?</a></li>
        <li><a href="help_nego.php">Bagaimana cara User melakukan Nego pesanan terhadap admin?</a></li>
      </ol>
    </div>
  </div>
</section>
</div>



<?php
  require 'includes/footer.php';
?>