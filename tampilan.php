<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Tugas Web 2 - CRUD Sederhana</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
</head>

<body>

    <center>
        <h2>DATA MAHASISWA</h2>
    </center>

    <fieldset>
        <legend>Tambah Data Baru</legend>
        <form action="tambah.php" method="POST">
            <table border="0">
                <tr>
                    <td>Nama</td>
                    <td>: <input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>: <input type="text" name="nim" required></td>
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
                    <td><button type="submit">Tambah Data</button></td>
                </tr>
            </table>
        </form>
    </fieldset>

    <br><br>

    <table id="tabelMahasiswa" border="1" cellpadding="10" cellspacing="0" style="width: 100%;">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $query = mysqli_query($conn, "SELECT * FROM tabledata");
            while ($row = mysqli_fetch_array($query)):
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['nim'] ?></td>
                    <td><?= $row['jurusan'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
                        <a href="hapus.php?id=<?= $row['id'] ?>">Hapus</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tabelMahasiswa').DataTable();
        });
    </script>

</body>

</html>
