<?php

$nama = "Galang";
$kelas = "XII PPLG 2";

$nilai_tugas = 85;
$nilai_UTS = 80;
$nilai_UAS = 90;

$nilai_akhir = $nilai_tugas * 30/100 + $nilai_UTS * 30/100 + $nilai_UAS * 40/100;

if ($nilai_akhir >= 90) {
    $grade = "A";
} elseif ($nilai_akhir >= 80) {
    $grade = "B";
} elseif ($nilai_akhir >= 70) {
    $grade = "C";
} elseif ($nilai_akhir >= 60) {
    $grade = "D";
} else {
    $grade = "E";
}

if ($nilai_akhir >= 75) {
    $status = "LULUS";
} else {
    $status = "GA LULUS";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Siswa</title>
</head>

<body>

    <p>Nama : <?php echo $nama; ?></p>
    <p>Kelas : <?php echo $kelas; ?></p>
    <p>Nilai Tugas : <?php echo $nilai_tugas; ?></p>
    <p>Nilai UTS : <?php echo $nilai_UTS; ?></p>
    <p>Nilai UAS : <?php echo $nilai_UAS; ?></p>
    <p>Nilai Akhir : <?php echo $nilai_akhir; ?></p>
    <p>Grade : <?php echo $grade; ?></p>
    <p>Status : <?php echo $status; ?></p>

</body>
</html>