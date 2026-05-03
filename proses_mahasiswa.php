<?php
require_once 'classes/Mahasiswa.php';
$mahasiswa = new Mahasiswa();

$mahasiswa->create($_POST['nim'], $_POST['nama'], $_POST['jurusan'], $_POST['alamat'], $_POST['email'], $_POST['no_hp']);

header("Location: form_mahasiswa.php");
?>