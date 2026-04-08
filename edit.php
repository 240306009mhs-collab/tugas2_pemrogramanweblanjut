<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM tabledata WHERE id='$id'");
$row = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Edit Data - Basic</title>
</head>

<body>

    <h2>Edit Data Mahasiswa</h2>
    <legend>Form Edit Data</legend>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">

        <table border="0" cellpadding="5">
            <tr>
                <td>Nama</td>
                <td>: <input type="text" name="nama" value="<?= $row['nama'] ?>" required></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>: <input type="text" name="nim" value="<?= $row['nim'] ?>" required></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:
                    <input name="jurusan" required>
                    </input>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit">Update Data</button>
                    <a href="index.php"><button type="button">Batal</button></a>
                </td>
            </tr>
        </table>
    </form>
    </fieldset>

</body>

</html>
