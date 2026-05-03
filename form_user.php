<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Input User</h2>
    <form action="proses_user.php" method="POST">
        <label for="nama">Nama : </label><br>
        <input type="text" name="nama"><br>
        <label for="email">Email : </label><br>
        <input type="email" name="email"><br>
        <label for="password">Password : </label><br>
        <input type="password" name="password"><br><br>
        <button>kirim</button>

    </form>
    <br>
    <h2>Data User</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php
        require_once 'classes/user.php';
        $user = new user();
        $data = $user->read();
        while($row = $data->fetch_assoc()){
            echo "
            <tr>
                <td>{$row['id']}</td>
                <td>{$row['nama']}</td>
                <td>{$row['email']}</td>
                <td>
                    <a href='edit_user.php?id={$row['id']}'>Edit</a> |
                    <a href='proses_user_delete.php?id={$row['id']}' 
                    onclick=\"return confirm('Yakin mau hapus data ini?')\">Delete</a>
                </td>
            </tr>
            ";
        }
        ?>
    </table>
</html>