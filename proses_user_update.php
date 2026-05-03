<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'classes/user.php';
$user = new user();

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];

if(!empty($_POST['password'])){
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $user->updateWithPassword($id, $nama, $email, $password);
}else{
    $user->update($id, $nama, $email);
}

header("Location: form_user.php");
exit;
?>