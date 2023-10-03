<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran</title>
</head>
<body>

<h1>Formulir Pendaftaran</h1>
<form action="terima_post.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <label for="confirm_password">Konfirmasi Password:</label>
    <input type="password" id="confirm_password" name="confirm_password" required><br><br>

    <label>Jenis Kelamin: </label>
    <input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-laki" required>
    <label for="laki_laki">Laki-laki</label>
    <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required>
    <label for="perempuan">Perempuan</label><br><br>

    <label for="tanggal_lahir">Tanggal Lahir:</label>
    <input type="date" id="tanggal_lahir" name="tanggal_lahir" required><br><br>

    <label for="alamat">Alamat:</label><br>
    <textarea id="alamat" name="alamat" rows="4" cols="50" required></textarea><br><br>

    <button type="submit" name="submit">Kirim</button>
</form>

</body>
</html>
