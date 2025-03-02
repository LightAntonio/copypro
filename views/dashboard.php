<?php
session_start();
if (!isset($_SESSION["usuario_id"])) {
    header("Location: login.php");
    exit();
}
?>

<h1>Bem-vindo, <?php echo $_SESSION["usuario_nome"]; ?>!</h1>
<a href="logout.php">Sair</a>

<h1>Página após login (exclusiva para usuários)</h1>