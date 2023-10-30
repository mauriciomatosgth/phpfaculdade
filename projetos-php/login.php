<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
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

    <main id="login">
        
        <div class="div-form">
        <?php
include('cadastro.php');

if(isset($_POST['l'])|| isset($_POST['s'])){

    if(strlen($_POST['l']) == 0){
        echo"Preencha seu e-mail";
    }else if(strlen($_POST['s']) == 0){
        echo"Preencha sua senha";
    }else{
        $email = $mysqli->real_escape_string($_POST['l']);
        $senha = $mysqli->real_escape_string($_POST['s']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

        $sql_query = $mysqli -> query($sql_code) or die("Falha na execução do código SQL". $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
            header("Location: generos.php");


 
        }else{
            echo"$sql_code";
            echo"Falha ao logar! Email ou senha incorretos";
        }
    }
}
      ?>      
        <form action="login.php" method="post">
            <h2 id="titulo-form">Login</h2>
            
            <input type="text" id="nome" name="l" >
            <br>
            
            <input type="password" id="senha" name="s" >

            <input id="botao" type="submit" value="Entrar">
        </form>
        </div>
    </main>
    
</body>
</html>