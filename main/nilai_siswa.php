<?php

require_once 'header.php';

$proses = $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];

echo '<div class=\'container-fluid\'>';
if (!empty($proses)) {
      echo '<p class=\'my-0 text-capitalize fs-4\'>Nama : ' . $nama_siswa . '</p>';
      echo '<p class=\'my-0 text-capitalize fs-4\'>Mata Kuliah : ' . $mata_kuliah . '</p>';
      echo '<p class=\'my-0 text-capitalize fs-4\'>Nilai UTS : ' . $nilai_uts . '</p>';
      echo '<p class=\'my-0 text-capitalize fs-4\'>Nilai UAS : ' . $nilai_uas . '</p>';
      echo '<p class=\'my-0 text-capitalize fs-4\'>Nilai Tugas Praktikum : ' . $nilai_tugas . '</p>';
}
echo '</div>';

$uts = $nilai_uts * 30/100;
$uas = $nilai_uas * 35/100;
$tugas = $nilai_tugas * 35/100;
$jumlah_nilai = $uts + $uas + $tugas;

echo '<br><br><br>';

echo '<div class=\'container-fluid\'>';
if($jumlah_nilai >= 55){
      echo '<p class=\'my-0 text-capitalize fs-4\'>Anda Lulus</p>';
}
else {
      echo '<p class=\'my-0 text-capitalize fs-4\'>Anda Tidak Lulus</p>';
}

if($jumlah_nilai == 0 && $jumlah_nilai <= 35){
      echo '<p class=\'my-0 text-capitalize fs-4\'>Grade Anda adalah E</p>';
}
elseif($jumlah_nilai >= 36 && $jumlah_nilai <= 55){
      echo '<p class=\'my-0 text-capitalize fs-4\'>Grade Anda adalah D</p>';
}
elseif($jumlah_nilai >= 56 && $jumlah_nilai <= 69){
      echo '<p class=\'my-0 text-capitalize fs-4\'>Grade Anda adalah C</p>';
}
elseif($jumlah_nilai >= 70 && $jumlah_nilai <= 84){
      echo '<p class=\'my-0 text-capitalize fs-4\'>Grade Anda adalah B</p>';
}
elseif($jumlah_nilai >= 85 && $jumlah_nilai <= 100){
      echo '<p class=\'my-0 text-capitalize fs-4\'>Grade Anda adalah A</p>';
}
elseif($jumlah_nilai < 0 && $jumlah_nilai > 100){
      echo '<p class=\'my-0 text-capitalize fs-4\'>Grade Anda adalah I</p>';
}

switch ($jumlah_nilai) {
      case $jumlah_nilai == 0 && $jumlah_nilai <= 35 :
            echo '<p class=\'my-0 text-capitalize fs-4\'>Sangat Kurang</p>';
            break;
      case $jumlah_nilai >= 36 && $jumlah_nilai <= 55 :
            echo '<p class=\'my-0 text-capitalize fs-4\'>Kurang</p>';
            break;
      case $jumlah_nilai >= 56 && $jumlah_nilai <= 69 :
            echo '<p class=\'my-0 text-capitalize fs-4\'>Cukup</p>';
            break;
      case $jumlah_nilai >= 70 && $jumlah_nilai <= 84 :
            echo '<p class=\'my-0 text-capitalize fs-4\'>Memuaskan</p>';
            break;
      case $jumlah_nilai >= 85 && $jumlah_nilai <= 100 :
            echo '<p class=\'my-0 text-capitalize fs-4\'>Sangat Memuaskan</p>';
            break;
      default:
      echo '<p class=\'my-0 text-capitalize fs-4\'>Tidak ada</p>';
            break;
}
echo '</div>';

require_once 'footer.php';
?>