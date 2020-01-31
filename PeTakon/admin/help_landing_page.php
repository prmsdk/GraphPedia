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
    <h6><a href="bantuan.php">Help</a> / Landing Page</h6>
    <h4 class="font-weight-bolder">Penjelasan Halaman Utama Pelanggan</h4>
    <p>Pada halaman utama bagian atas, anda akan diperlihatkan sisi Navigasi Menu dan Slider Promosi yang berisi jam kerja, nomor telepon, logo, judul, menu navigasi, kalimat ajakan dan promosi. Berikut masing - masing fungsinya :</p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/home_01.jpg" alt="userlogin">

    <ol type="a">
      <li>Jam kerja ditampilkan paling atas agar menjadi fokus pertama pelanggan.</li>
      <li> Nomor Telepon aktif sebagai kontak person perusahaan.</li>
      <li>Tombol Produk yang mengandung pop-up mengarah ke kategori produk untuk memudahkan pelanggan dalam memilih produk sesuai kategori.</li>
      <li>Tombol Cara Kerja yang mengarah ke konten cara kerja pemesanan.</li>
      <li>Tombol Portofolio yang mengarah ke konten gambar yang menampilkan hasil kerja terbaik perusahaan.</li>
      <li>Tombol Testimoni yang mengarah ke konten testimoni dari client.</li>
      <li>Tombol Hubungi Kami yang mengarah ke kolom pesan, alamat, dan kontak personal perusahaan.</li>
      <li>Tombol Masuk untuk melakukan Login (admin/pelanggan).</li>
      <li>Tombol Daftar untuk melakukan pendaftaran akun pelanggan.</li>
      <li>Banner promosi dan kalimat ajakan yang dapat diatur melalui web admin pada Setting -&gt; Promosi/Slider.</li>
      <li>Tombol yang mengarah ke suatu halaman, dapat diatur melalui web admin pada Setting -&gt; Promosi/Slider.</li>
    </ol>

    <p>Konten “Produk Kami” yang berfungsi sebagai tempat memilih produk bagi pelanggan, produk terbagi berdasarkan kategori yang dapat diatur pada Web Admin dengan cara ke menu Master -&gt; Kategori Produk. Produk yang tampil di halaman pelanggan dapat diatur pada Web Admin dengan cara ke menu Master -&gt; Produk. Setiap produk yang tampil akan menampilkan gambar, nama, dan harga terrendah per pcs. Gambar dapat diatur pada Web Admin menu Master -&gt; Gambar Produk, sedangkan harga terendah memerlukan rumus matematika, untuk mengubahnya harus menghubungi developer. Berikut rumus perhitungan harga terrendah.</p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/home_02.jpg" alt="userlogin">

    <p>Konten selanjutnya pada halaman utama terdapat “Cara Kerja” dan “Portfolio”. Konten “Cara Kerja” berisi langkah langkah pemesanan produk hingga selesai, konten ini tidak dapat diubah secara manual melalui Web Admin. Konten “Portfolio” berisi gambar hasil kerja produk terbaik (portfolio perusahaan), pelanggan dapat klik gambar untuk memperbesar tampilan gambar agar portfolio terlihat lebih jelas, konten ini dapat diatur pada Web Admin dengan cara ke menu Setting -&gt; Portfolio.</p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/home_03.jpg" alt="userlogin">

    <p>Konten berikutnya adalah “Testimonial” dan konten untuk Pendaftaran. “Testimonial” berisi komentar/testimonial yang dapat meyakinkan pelanggan untuk melakukan pemesanan pada perusahaan Anda. Konten testimonial ini dapat diatur pada Web Admin dengan cara ke menu Setting -&gt; Testimonial.</p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/home_04.jpg" alt="userlogin">

    <p>Konten berikutnya adalah “Kontak Kami” dan “Tentang Kami”. “Kontak Kami” berisi kolom pesan kepada admin yang akan dikirim melalui basis data dan melalui email. Kolom pesan berada dibagian kiri, sedangkan bagian kanan terdapat informasi kontak perusahaan, alamat, nomor WhatsApp, nomor telepoon, dan email. “Tentang Kami” berisi deskripsi perusahaan yang dapat diatur pada Web Admin dengan cara ke menu Master -&gt; Admin, baris pertama pada kolom deskripsi.</p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/home_05.jpg" alt="userlogin">

    <p>Konten footer menjadi yang paling bawah, konten ini akan tetap muncul pada setiap halaman. Terdapat beberapa elemen yang keseluruhannya harus menghubungi Developer untuk melakukan peubahan. Berikut elemen - elemen yang ditampilkan pada footer : </p>

    <img class="img-fluid d-block mb-3 mx-auto" width="80%" src="bantuan/img/home_06.jpg" alt="userlogin">

    a.&nbsp;&nbsp;&nbsp; Peta & Alamat
    <p>Peta dapat di klik dan akan langsung menuju google maps untuk dapat mendapatkan rute perjalanan menuju alamat tujuan. Alamat ditampilkan sebagai penjelas jika alamat yang tertera pada google maps tidak tepat.</p>
    b.&nbsp;&nbsp;&nbsp; Jam Kerja
    <p>Jam Kerja yang ditampilkan memiliki format grafis atau elemen tersebut adalah gambar, maka tidak dapat diubah melalui Web Admin.</p>
    c.&nbsp;&nbsp;&nbsp;&nbsp; Tentang
    <p>Elemen ini berisi komponen, sebagian komponen belum terisi, karna isi dari komponen haruslah berasal dari perusahaan langsung semisal “Syarat & Ketentuan” saat melakukan pendaftaran dan Kebijakan Privasi.</p>
    d.&nbsp;&nbsp;&nbsp; Bantuan
    <p>Elemen ini berisi komponen yang mengarah ke konten “Produk Kami” dan “Hubungi Kami”.</p>
    e.&nbsp;&nbsp;&nbsp; Media Sosial
    <p>Elemen ini berisi ikon/simbol media social yang jika di klik, pelanggan akan diarahkan pada akun media sosial perusahaan, sedangkan ikon whatsapp akan mengarahkan pelanggan langsung ke nomor pelanggan dan menulis pesan tertentu secara otomatis.<strong><br></strong></p>
  </section>
</div>

<?php
  require 'includes/footer.php';
?>