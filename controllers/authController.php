<?php
session_start();
require_once '../config/db.php';
require_once '../models/User.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $user = new User();
    $usuario = $user->verificaUsuario($email, $senha);

    if ($usuario) {
        $_SESSION["usuario_id"] = $usuario["id"];
        $_SESSION["usuario_nome"] = $usuario["nome"];
        header("Location: ../views/dashboard.php");
        exit();
    } else {
        $_SESSION["erro_login"] = "E-mail ou senha incorretos!";
        header("Location: ../views/login.php");
        exit();
    }
}
?>
