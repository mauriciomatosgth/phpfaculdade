
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
   
</head>
<body>


    
            <?php
    if(!isset($_SESSION)){
        session_start();
    }
    
    if(!isset($_SESSION['id'])){?>
        <nav>
            <img src="imagem/logo-netflix.png" alt="">
            <a href="index.php">Home</a>
            <a href="login.php">Login</a>
            <a href="generos.php">Generos</a>
            <a href="#">Contato</a>
            <a href="#">Descrição</a>
    
        </nav>
        <main>
    <?php
        die("Você não pode acessar esta pagina poque não esta logado.<p> <a href=\"index.php\">Home</a></p>");
    
    }
    ?>
        </main>
    
</body>
</html>
