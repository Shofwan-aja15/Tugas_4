<!DOCTYPE html>
<html>
<head>
    <title>Proses Pendaftaran</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari input form
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $confirm_password = $_POST["confirm_password"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $alamat = $_POST["alamat"];

    // Validasi data
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password) || empty($jenis_kelamin) || empty($tanggal_lahir) || empty($alamat)) {
        echo "<h1>Pendaftaran Gagal!</h1>";
        echo "<p>Semua field harus diisi.</p>";
    } elseif ($password !== $confirm_password) {
        echo "<h1>Pendaftaran Gagal!</h1>";
        echo "<p>Password dan konfirmasi password tidak cocok.</p>";
    } else {
        // Di sini Anda dapat menyimpan data ke dalam database atau melakukan tindakan lain sesuai kebutuhan.
        // Dalam contoh ini, kami hanya menampilkan data yang diterima.
        echo "<h1>Pendaftaran Berhasil!</h1>";
        echo "<p>Username: $username</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Jenis Kelamin: $jenis_kelamin</p>";
        echo "<p>Tanggal Lahir: $tanggal_lahir</p>";
        echo "<p>Alamat: $alamat</p>";
    }
} else {
    echo "<h1>Halaman ini tidak dapat diakses langsung.</h1>";
}
?>

</body>
</html>
