<?php
require_once 'classes/Mahasiswa.php';
$mahasiswa = new Mahasiswa();

$mahasiswa->delete($_GET['id']);

header("Location: form_mahasiswa.php");
?>