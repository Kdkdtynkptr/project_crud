<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Input Mahasiswa</h2>
    <form action="proses_mahasiswa.php" method="POST">
        <label for="nim">NIM : </label><br>
        <input type="text" name="nim"><br>
        <label for="nama">Nama : </label><br>
        <input type="text" name="nama"><br>
        <label for="jurusan">Jurusan : </label><br>
        <input type="text" name="jurusan"><br>
        <label for="alamat">Alamat : </label><br>
        <textarea name="alamat"></textarea><br>
        <label for="email">Email : </label><br>
        <input type="email" name="email"><br>
        <label for="no_hp">No HP : </label><br>
        <input type="text" name="no_hp"><br><br>
        <button>kirim</button>
    </form>
    <br>
    <h2>Data Mahasiswa</h2>
    <table>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>No HP</th>
            <th>Action</th>
        </tr>
        <?php
        require_once 'classes/Mahasiswa.php';
        $mahasiswa = new Mahasiswa();
        $data = $mahasiswa->read();
        while($row = $data->fetch_assoc()){
            echo "
            <tr>
                <td>{$row['nim']}</td>
                <td>{$row['nama']}</td>
                <td>{$row['jurusan']}</td>
                <td>{$row['alamat']}</td>
                <td>{$row['email']}</td>
                <td>{$row['no_hp']}</td>
                <td>
                    <a href='edit_mahasiswa.php?id={$row['nim']}'>Edit</a> |
                    <a href='proses_delete_mahasiswa.php?id={$row['nim']}' 
                    onclick=\"return confirm('Yakin mau hapus data ini?')\">Delete</a>
                </td>
            </tr>
            ";
        }
        ?>
    </table>
</body>
</html>