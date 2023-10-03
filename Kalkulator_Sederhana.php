<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari input form
    $angka1 = isset($_POST['angka1']) ? $_POST['angka1'] : 0;
    $angka2 = isset($_POST['angka2']) ? $_POST['angka2'] : 0;
    $operator = isset($_POST['operator']) ? $_POST['operator'] : '';

    // Melakukan operasi aritmatika sesuai operator yang dipilih
    switch ($operator) {
        case '+':
            $hasil = $angka1 + $angka2;
            break;
        case '-':
            $hasil = $angka1 - $angka2;
            break;
        case '*':
            $hasil = $angka1 * $angka2;
            break;
        case '/':
            // Mencegah pembagian dengan angka 0
            $hasil = ($angka2 != 0) ? $angka1 / $angka2 : 'Tidak bisa dibagi oleh 0';
            break;
        default:
            $hasil = 'Pilih operator yang valid (+, -, *, /)';
    }

    // Menampilkan hasil
    echo "<p>Hasil: $hasil</p>";
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Masukkan Angka 1: <input type="number" name="angka1" required><br>
    Masukkan Angka 2: <input type="number" name="angka2" required><br>
    Pilih Operator: 
    <select name="operator" required>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select><br>
    <input type="submit" name="submit" value="Hitung">
</form>

</body>
</html>
