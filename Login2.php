<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        label {
            display: inline-block;
            width: 100px;
        }
    </style>
</head>
<body>
    <h1>Halaman Registrasi</h1>
    <form method="POST" action="process_registration.php">
        <label for="" style="width: 100px;">Nama</label>
        <input type="text" name="Nama" required>
        <br>
        <label for="" style="width: 100px;">Email</label>
        <input type="email" name="Email" required>
        <br>
        <label for="" style="width: 100px;">Prodi</label>
        <select name="Prodi" required>
            <option value="MI">MI</option>
            <option value="Akuntansi">Akuntansi</option>
            <option value="Holtikultur">Holtikultur</option>
        </select>
        <br>
        <label for="" style="width: 100px;">Alamat</label>
        <textarea name="Alamat" rows="4" cols="50" required></textarea>
        <br>
        <label for="" style="width: 100px;">Umur</label>
        <input type="number" name="Umur" required>
        <br>
        <label for="" style="width: 100px;">Jenis Kelamin</label>
        <input type="radio" name="JenisKelamin" value="Laki-Laki" required> Laki-Laki
        <input type="radio" name="JenisKelamin" value="Perempuan" required> Perempuan
        <br>
        <label for="" style="width: 100px;">Hobi</label>
        <input type="checkbox" name="Hobi[]" value="Membaca"> Membaca
        <input type="checkbox" name="Hobi[]" value="Olahraga"> Olahraga
        <input type="checkbox" name="Hobi[]" value="Musik"> Musik
        <br>
        <label for="" style="width: 100px;">Username</label>
        <input type="text" name="Username" required>
        <br>
        <label for="" style="width: 100px;">Password</label>
        <input type="password" name="Password" required>
        <br>
        
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
