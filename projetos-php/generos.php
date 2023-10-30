<?php
include('seguranca.php');
if(!isset($_SESSION)){
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
        <img src="imagem/logo-netflix.png" alt="">
        <a href="index.php">Home</a>
        <a href="login.php">Login</a>
        <a href="generos.php">Generos</a>
        <a href="#">Contato</a>
        <a href="#">Descrição</a>

    </nav>

<p> <?php echo "Bem vindo ". $_SESSION['nome'] ; ?></p>
<p><?php echo"<a href='logout.php'>Sair</a>"?></p>

    
</body>
</html>