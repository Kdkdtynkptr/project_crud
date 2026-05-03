<?php
require_once 'classes/user.php';
$user = new user();

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $user->delete($id);
}

header("Location: form_user.php");
exit;
?>