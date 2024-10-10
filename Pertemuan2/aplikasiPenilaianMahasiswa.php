<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Penilaian Mahasiswa</title>
</head>
<body>

<h2>Aplikasi Penilaian Mahasiswa</h2>
<form method="post" action="">
    Masukkan Nilai Mata Kuliah 1: <input type="number" name="nilai1" required><br><br>
    Masukkan Nilai Mata Kuliah 2: <input type="number" name="nilai2" required><br><br>
    Masukkan Nilai Mata Kuliah 3: <input type="number" name="nilai3" required><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {
    // Ambil nilai dari input form
    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
    $nilai3 = $_POST['nilai3'];

    // Hitung rata-rata
    $rata_rata = ($nilai1 + $nilai2 + $nilai3) / 3;

    // Tentukan status kelulusan
    if ($rata_rata >= 60) {
        $status = "Lulus";
    } else {
        $status = "Tidak Lulus";
    }

    // Tampilkan hasil
    echo "<h3>Hasil Penilaian</h3>";
    echo "Nilai Rata-Rata: " . round($rata_rata, 2) . "<br>";
    echo "Status Kelulusan: " . $status . "<br>";
}
?>

</body>
</html>
