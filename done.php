<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Registrasi</title>
</head>
<body>
    <h1>Hasil Registrasi</h1>
    <table border="1" cellspacing="0" cellpadding= "5">
        <tr>
            <th>nama</th>
            <td><?php echo $_POST['Nama']; ?></td>
        </tr>
        <tr>
            <th>email</th>
            <td><?php echo $_POST['email']; ?></td>
        </tr>
        <tr>
            <th>prodi</th>
            <td><?php echo $_POST['prodi']; ?></td>
        </tr>
        <tr>
            <th>alamat</th>
            <td><?php echo $_POST['alamat']; ?></td>
        </tr>
        <tr>
            <th>Umur</th>
            <td><?php echo $_POST['Umur']; ?></td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td><?php echo $_POST['JenisKelamin']; ?></td>
        </tr>
        <tr>
            <th>Hobi</th>
            <td>
                <?php 
                if(isset($_POST['Hobi'])){
                    $hobi = $_POST['Hobi'];
                    echo implode(', ', $hobi);
                }
                ?>
            </td>
        </tr>
        <tr>
            <th>Username</th>
            <td><?php echo $_POST['username']; ?></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><?php echo $_POST['password']; ?></td>
        </tr>
    </table>
</body>
</html>