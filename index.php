<?php
$host="10.11.12.109";
$user="estafet_user";
$pass="Qwerty123$%";

$conn=mysqli_connect("$host","$user","$pass");
include  'connection.php';
            $query = "SELECT * FROM mahasiswa";
            $result = mysqli_query($conn, $query);
            $no = 1;
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
    <?php 
    if (isset($error)) { 
    ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php 
    } 
    ?>
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
        </body>
    </table>
    
</body>
</html>

<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "KRS_estafet";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("database_connection failed" . mysqli_connect_error());
}