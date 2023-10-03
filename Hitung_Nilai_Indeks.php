<!DOCTYPE html>
<html>
<head>
    <title>Hitung Nilai dan Indeks</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari input form
    $nilai = isset($_POST['nilai']) ? $_POST['nilai'] : 0;

    // Menghitung indeks berdasarkan ketentuan
    if ($nilai >= 80) {
        $indeks = 'A';
    } elseif ($nilai >= 60) {
        $indeks = 'B';
    } elseif ($nilai >= 30) {
        $indeks = 'C';
    } elseif ($nilai >= 10) {
        $indeks = 'D';
    } else {
        $indeks = 'E';
    }

    // Menampilkan hasil
    echo "<p>Nilai: $nilai</p>";
    echo "<p>Indeks: $indeks</p>";
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Masukkan Nilai: <input type="number" name="nilai" required>
    <input type="submit" name="submit" value="Proses">
</form>

</body>
</html>