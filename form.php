<?php
session_start();

require 'autoload.php';

$user = filter_input(INPUT_POST, 'user',FILTER_SANITIZE_SPECIAL_CHARS);
$password = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);

if($user && $password){
    $log = new Guard($user, $password);
    header("Location: index.php");
    exit;
}else{
    $_SESSION['warning'] = 'Login invalido!';
    header("Location: index.php");
    exit;
}