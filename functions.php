<?php
require_once('password.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $passWord = $_POST["password"];

    $hash = password_hash($passWord, PASSWORD_DEFAULT);

    header("Location: index.php?hashValue=" . urlencode($hash));
}
?>