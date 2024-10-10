<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
</head>
<body>


    <h2>Aplikasi Kalkulator Sederhana</h2>
    <form method="POST" action="">
        <label for="bil1">Masukkan Bilangan 1:</label>
        <input type="number" id="bil1" name="bil1" required><br><br>

        <label for="bil2">Masukkan Bilangan 2:</label>
        <input type="number" id="bil2" name="bil2" required><br><br>

        <label for="operasi">Pilih Operasi:</label>
        <button type="submit" name="operasi" value="tambah">Penjumlahan (+)</button>
        <button type="submit" name="operasi" value="kurang">Pengurangan (-)</button>
        <button type="submit" name="operasi" value="kali">Perkalian (*)</button>
        <button type="submit" name="operasi" value="bagi">Pembagian (/)</button><br><br>
        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
        if (isset($_POST['bil1']) && isset($_POST['bil2']) && isset($_POST['operasi'])) {
            $bil1 = $_POST['bil1'];
            $bil2 = $_POST['bil2'];
            $operasi = $_POST['operasi'];
            $hasil = 0;

            // Proses perhitungan
            if ($operasi == "tambah") {
                $hasil = $bil1 + $bil2;
                $op = "+";
            } elseif ($operasi == "kurang") {
                $hasil = $bil1 - $bil2;
                $op = "-";
            } elseif ($operasi == "kali") {
                $hasil = $bil1 * $bil2;
                $op = "*";
            } elseif ($operasi == "bagi") {
                if ($bil2 != 0) {
                    $hasil = $bil1 / $bil2;
                    $op = "/";
                } else {
                    echo "<p>Pembagian dengan nol tidak diperbolehkan!</p>";
                    exit();
                }
            }

            // Tampilkan hasil
            echo "<h3>Hasil: $bil1 $op $bil2 = $hasil</h3>";
        }
    ?>
</body>
</html>
