<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Edit Mahasiswa</h2>
    <?php
    require_once 'classes/Mahasiswa.php';
    $mahasiswa = new Mahasiswa();
    $data = $mahasiswa->getById($_GET['id']);
    ?>
    <form action="proses_update_mahasiswa.php" method="POST">
        <input type="hidden" name="nim" value="<?php echo $data['nim']; ?>">
        
        <label for="nim_tampil">NIM : </label><br>
        <input type="text" name="nim_tampil" value="<?php echo $data['nim']; ?>" disabled><br>
        
        <label for="nama">Nama : </label><br>
        <input type="text" name="nama" value="<?php echo $data['nama']; ?>"><br>
        
        <label for="jurusan">Jurusan : </label><br>
        <input type="text" name="jurusan" value="<?php echo $data['jurusan']; ?>"><br>
        
        <label for="alamat">Alamat : </label><br>
        <textarea name="alamat"><?php echo $data['alamat']; ?></textarea><br>
        
        <label for="email">Email : </label><br>
        <input type="email" name="email" value="<?php echo $data['email']; ?>"><br>
        
        <label for="no_hp">No HP : </label><br>
        <input type="text" name="no_hp" value="<?php echo $data['no_hp']; ?>"><br><br>
        
        <button>Update</button>
    </form>
</body>
</html>