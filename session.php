<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_intersect_assoc</title>
</head>
<body>
<?php
session_start();
$_SESSION['nome'] = $_POST["login"];
$_SESSION['senha'] = $_POST["senha"];

if($_SESSION['nome'] == 'mauricio' && $_SESSION['senha'] == 12345678){
    
    ?>
    <h1>Login efetuado com sucesso.</h1>
    <p>Seja bem vindo <?php echo $_SESSION['nome']?></p>
<a href="exercicios.php">Link dos Exercicios.</a>

<?php
}
else{
    echo"Login ou Senha invalido";
    session_abort();
}



?>
    
</body>
</html>