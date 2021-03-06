<?php
  include '../includes/config.php';
  session_start();
  if(isset($_SESSION['id_admin'])){
    $id_admin = $_SESSION['id_admin'];
    $result_admin = mysqli_query($con, "SELECT * FROM admin WHERE ADM_ID = '$id_admin'");
    $data_admin = mysqli_fetch_assoc($result_admin);
  }

// memanggil library FPDF
require '../../fpdf/fpdf.php';
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('P','mm','A4');
// membuat halaman baru
$pdf->AddPage();
$pdf->isFinished = false;
// setting jenis font yang akan digunakan
$pdf->SetFont('Times','B',16);
// mencetak string 
$pdf->Image('../../src/img/icons/cap.png',20,10,22,22);
$pdf->Cell(190,12,'PeTakon',0,1,'C');
$pdf->SetFont('Times','',10);
$pdf->Cell(190,7,'Jl. Karimata Gg. Masjid No. 1, Kec. Sumbersari',0,1,'C');
$pdf->Cell(190,4,'Kabupaten Jember - (0331) 412990',0,1,'C');
$pdf->Cell(190,4,'','B',1);
$pdf->Cell(190,1,'','B',1);

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Times','B',14);
$pdf->Cell(190,12,'LAPORAN DATA UKURAN',0,1,'C');

$pdf->SetFont('Times','B',10);
// Menampilkan Header Tabel
$pdf->Cell(11,6,'',0,0,'C');
$pdf->Cell(10,6,'NO',1,0,'C');
$pdf->Cell(30,6,'ID UKURAN',1,0,'C');
$pdf->Cell(50,6,'JENIS UKURAN',1,0,'C');
$pdf->Cell(40,6,'HARGA UKURAN',1,0,'C');
$pdf->Cell(40,6,'KATEGORI UKURAN',1,1,'C');


// select seluruh data pada tabel ukuran
$pdf->SetFont('Times','',10);
$result_ukuran = mysqli_query($con, "SELECT * FROM ukuran, kategori_ukuran WHERE ukuran.ID_KAT_UKURAN = kategori_ukuran.ID_KAT_UKURAN");
$i = 0;
while($data_ukuran = mysqli_fetch_assoc($result_ukuran)){
  $i+=1;
  $pdf->Cell(11,6,'',0,0,'C');
  $pdf->Cell(10,6,$i,1,0,'C');
  $pdf->Cell(30,6,$data_ukuran['ID_UKURAN'],1,0,'C');
  $pdf->Cell(50,6,$data_ukuran['JENIS_UKURAN'],1,0,'C');
  $pdf->Cell(40,6,'Rp. '. number_format($data_ukuran['HARGA_UKURAN'], 0,".","."),1,0,'C');
  $pdf->Cell(40,6,$data_ukuran['NAMA_KAT_UKURAN'],1,1,'C');
}


// tampilkan footer ketika dokumen telah selesai
$pdf->isFinished = true;
if($pdf->isFinished){
  $pdf->setY(-60);
  $pdf->SetFont('Times','',12);
  $pdf->Cell(130);
  date_default_timezone_set('Asia/Jakarta');
  $date = date("d")." ".month(date("n"))." ".date("Y");
  $pdf->Cell(30,6,'Jember, '. $date,0,1,'C');
  $pdf->Cell(130);
  $pdf->Cell(30,6,"Penanggung Jawab,",0,1,'C');
  $pdf->Cell(10,7,'',0,1);
  $pdf->Cell(10,7,'',0,1);
  $pdf->Cell(10,7,'',0,1);
  $pdf->Cell(130);
  $pdf->Cell(30,6,$data_admin['ADM_NAMA_USAHA_ADM'],0,1,'C');
}


$pdf->Output();


    

?>