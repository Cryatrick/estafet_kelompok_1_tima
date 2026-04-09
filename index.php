
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>KRS Estafet</title>
</head>
<body class = "container mt-5">
    <h1 class = "text-center mb-4">KRS Estafet</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Mahasiswa</th>
                <th>NPM</th>
                <th>Matakuliah</th>
                <th>SKS</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'connection.php';
            $query = "SELECT * FROM mahasiswa";
            $result = mysqli_query($conn, $query);
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $no++ . "</td>";
                echo "<td>" . $row['nama_mahasiswa'] . "</td>";
                echo "<td>" . $row['npm'] . "</td>";
                echo "<td>" . $row['matakuliah'] . "</td>";
                echo "<td>" . $row['sks'] . "</td>";
                echo "<td>";
                echo "<a href='edit.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Edit</a> ";
                echo "<a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm' onclick=\"return confirm('Apakah Anda yakin ingin menghapus data ini?')\">Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    
</body>
</html>