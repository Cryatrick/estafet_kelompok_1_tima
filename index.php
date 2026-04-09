<?php
require 'connection.php';

// $host="10.11.12.109";
// $user="estafet_user";
// $pass="Qwerty123$%";

// $conn=mysqli_connect("$host","$user","$pass");
$query = mysqli_query($conn, "SELECT * From mahasiswa");
?>
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
  
    <form method="POST">
        <input type="text" 
            name="npm" 
            placeholder="Masukkan NPM Mahasiswa">
        <button type="submit">Kirim</button>
    </form>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Dosen</th>

                <th>Matakuliah</th>
                <th>SKS</th>

            </tr>
        </thead>
        <tbody>
            <?php
            
       foreach ($query as $row) {
    echo "<tr>";
    echo "<td>" . $no++ . "</td>";
    echo "<td>" . $row['mahasiswa_npm'] . "</td>";
    echo "<td>" . $row['mahasiswa_nama'] . "</td>";
    echo "<td>" . $row['mahasiswa_prodi'] . "</td>";
    echo "<td>" . $row['mahasiswa_tempatlahir'] . "</td>";
    echo "<td>" . $row['mahasiswa_tanggallahir'] . "</td>";
    echo "<td>";
    echo "<a href='edit.php"' class='btn btn-warning btn-sm'>Edit</a> ";
    echo "<a href='delete.php"' class='btn btn-danger btn-sm' onclick=\"return confirm('Apakah Anda yakin ingin menghapus data ini?')\">Hapus</a>";
    echo "</td>";
    echo "</tr>";
}
            ?>
        </body>
    </table>
    
</body>
</html>

