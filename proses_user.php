<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require_once 'classes/user.php';

    $user = new user();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        echo "DEBUG: masuk create<br>";

        if($user->create($nama, $email, $password)){
            header("Location: form_user.php");
            exit;
        }else{
            echo 'Gagal simpan data';
        }
    }else{
        echo 'Tidak valid';
    }
?>