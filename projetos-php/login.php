<?php
                    //acesso banco de dados
                    $usuario = 'root';
                    $senha = '';
                    $database = 'login';
                    $host = 'localhost';
                    
                    $mysqli = new mysqli($host,$usuario,$senha,$database);
                    
                    if ($mysqli ->error){
                        die("Falha ao conectar ao banco de dados: ". $mysqli->error);
                    }
                    
                    $aviso = "";
                    if(isset($_POST['l'])|| isset($_POST['s'])){

                        if(strlen($_POST['l']) == 0){
                            $aviso = "Preencha seu e-mail";
                        }else if(strlen($_POST['s']) == 0){
                            $aviso = "Preencha sua senha";
                        }else{
                            $email =$_POST['l'];  //$mysqli->real_escape_string($_POST['l']);
                            $senha = $_POST['s']; //$mysqli->real_escape_string($_POST['s']);

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
                                $aviso = "Falha ao logar! Email ou senha incorretos";
                            }
                        }
                    }
                ?>
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
            <?php
            if(!isset($_SESSION['id'])){

            
            ?>           
            <a href="login.php">Login</a>
            <?php
            }else{
            ?>
            <a href="generos.php">Generos</a>
            <?php
            }
            ?>

            
            <a href="#">Contato</a>
            <a href="#">Descrição</a>

        </nav>
                    
        <main id="login">
            
            <div class="div-form">              
                 
                <form action="login.php" method="post">
                    <h2 id="titulo-form">Login</h2>
                    
                    <input type="text" id="nome" name="l" >
                    <br>            
                    <input type="password" id="senha" name="s" >
                    <input id="botao" type="submit" value="Entrar">
                    <?php echo"$aviso"; ?>
                </form>
                
            </div>
        </main>
        
    </body>
</html>