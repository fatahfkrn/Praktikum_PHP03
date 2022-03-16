<?php
$proses = $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];

if (!empty($proses)) {
      echo 'Nama : ' . $nama_siswa;
      echo '<br/>Mata Kuliah : ' . $mata_kuliah;
      echo '<br/>Nilai UTS : ' . $nilai_uts;
      echo '<br/>Nilai UAS : ' . $nilai_uas;
      echo '<br/>Nilai Tugas Praktikum : ' . $nilai_tugas;
}

$uts = $nilai_uts * 30/100;
$uas = $nilai_uas * 35/100;
$tugas = $nilai_tugas * 35/100;
$jumlah_nilai = $uts + $uas + $tugas;

echo '<br><br><br>';

if($jumlah_nilai >= 55){
      echo 'Anda Lulus';
}
else {
      echo 'Anda Tidak Lulus';
}

echo '<br>';

if($jumlah_nilai == 0 && $jumlah_nilai <= 35){
      echo 'Grade Anda adalah E';
}
elseif($jumlah_nilai >= 36 && $jumlah_nilai <= 55){
      echo 'Grade Anda adalah D';
}
elseif($jumlah_nilai >= 56 && $jumlah_nilai <= 69){
      echo 'Grade Anda adalah C';
}
elseif($jumlah_nilai >= 70 && $jumlah_nilai <= 84){
      echo 'Grade Anda adalah B';
}
elseif($jumlah_nilai >= 85 && $jumlah_nilai <= 100){
      echo 'Grade Anda adalah A';
}
elseif($jumlah_nilai < 0 && $jumlah_nilai > 100){
      echo 'Grade Anda adalah I';
}

echo '<br>';

switch ($jumlah_nilai) {
      case $jumlah_nilai == 0 && $jumlah_nilai <= 35 :
            echo 'Sangat Kurang';
            break;
      case $jumlah_nilai >= 36 && $jumlah_nilai <= 55 :
            echo 'Kurang';
            break;
      case $jumlah_nilai >= 56 && $jumlah_nilai <= 69 :
            echo 'Cukup';
            break;
      case $jumlah_nilai >= 70 && $jumlah_nilai <= 84 :
            echo 'Memuaskan';
            break;
      case $jumlah_nilai >= 85 && $jumlah_nilai <= 100 :
            echo 'Sangat Memuaskan';
            break;
      default:
            echo 'Tidak ada';
            break;
}
?>