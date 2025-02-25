<?php
$nilai = 89; // Anda bisa mengganti nilai ini untuk menguji

if ($nilai >= 90 && $nilai <= 100) {
    $keterangan = "A";
} elseif ($nilai >= 80 && $nilai <= 89) {
    $keterangan = "B";
} elseif ($nilai >= 70 && $nilai <= 79) {
    $keterangan = "C";
} elseif ($nilai >= 0 && $nilai <= 69) {
    $keterangan = "D";
} else {
    $keterangan = "Nilai wajib di antara 0 - 100";
}

echo "Nilai $nilai = $keterangan";
?>

$jam = "18:30";
if ($jam >= "00:00" && $jam < "04:00") {
    $hasilWaktu = 'Dini Hari';
} elseif ($jam >= "04:00" && $jam < "10:00") {
    $hasilWaktu = 'Pagi';
} elseif ($jam >= "10:00" && $jam < "15:00") {
    $hasilWaktu = 'Siang';
} elseif ($jam >= "15:00" && $jam < "17:30") {
    $hasilWaktu = 'Sore';
} elseif ($jam >= "17:30" && $jam < "18:30") {
    $hasilWaktu = 'Petang';
} elseif ($jam >= "18:30" && $jam <= "24:00") {
    $hasilWaktu = 'Malam';
} else {
    $hasilWaktu = 'Dunia Lain';
}

$jadwal = [
    "15:45" => "Mandi",
    "16:00" => "Mengaji",
    "16:30" => "Mengerjakan tugas sekolah",
    "18:30" => "Makan malam",
    "19:00" => "Menghafalkan dialog festival",
    "20:00" => "Chatting dengan Raya",
    "21:00" => "Mengobrol bersama keluarga",
    "22:00" => "Tidur"
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>LKPD PHP Percabangan</title>
</head>
<body>
    <h2>Hasil Penentuan Nilai</h2>
    <?php echo "Nilai 89 = " . $hasilNilai; ?>
    
    <h2>Hasil Penentuan Waktu</h2>
    <?php echo "18:30 = " . $hasilWaktu; ?>
    
    <h2>Jadwal Harian Andi</h2>
    <ul>
        <?php foreach ($jadwal as $waktu => $kegiatan) { ?>
            <li><?php echo "$waktu - $kegiatan"; ?></li>
        <?php } ?>
    </ul>
</body>
</html>
