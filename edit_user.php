<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'classes/user.php';
$user = new user();

if(!isset($_GET['id'])){
    die("ID tidak ditemukan");
}

$data = $user->readByID($_GET['id']);
$row = $data->fetch_assoc();

if(!$row){
    die("Data tidak ditemukan");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>

<h2>Edit User</h2>

<form action="proses_user_update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <label for="">Nama:</label><br>
    <input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br>
    <label for="">Email:</label><br>
    <input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
    <label for="">Password:</label><br>
    <input type="password" name="password"><br>
    <input type="submit" value="Update">
</form>

</body>
</html>