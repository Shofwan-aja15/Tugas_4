<!DOCTYPE html>
<html>
<head>
    <title>Cek Bilangan Ganjil/Genap</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari input form
    $bilangan = isset($_POST['bilangan']) ? $_POST['bilangan'] : 0;

    // Menentukan apakah bilangan ganjil atau genap
    $hasil = ($bilangan % 2 == 0) ? 'Genap' : 'Ganjil';

    // Menampilkan hasil
    echo "<p>Bilangan $bilangan adalah $hasil</p>";
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Masukkan Bilangan: <input type="number" name="bilangan" required>
    <input type="submit" name="submit" value="Proses">
</form>

</body>
</html>
