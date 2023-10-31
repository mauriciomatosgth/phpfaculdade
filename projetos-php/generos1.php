<?php
    if(!isset($_SESSION)){
        session_start();
    }
    include('cadastro.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    
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

        <main>
            <?php
               
                
                if(!isset($_SESSION['id'])){
                
                    die("Você não pode acessar esta pagina porque não esta logado.<p> <a href=\"login.php\">Login</a></p>");
                
                }
             ?>

            <h1>Ranking de melhores séries por gênero.</h1>


            <div class="generos" id="apresentacao">

                
                    <p>Bem-vindo à nossa plataforma de entretenimento! Esta página é dedicada a apresentar as principais séries de TV, especialmente selecionadas com base no gênero que você escolher. Aqui, você encontrará uma seleção cuidadosamente curada das séries mais populares e emocionantes, todas dentro do seu gênero de preferência.</p>
                
                    <p>Nossa equipe de especialistas em entretenimento trabalha diligentemente para trazer até você uma variedade de séries que cativam e envolvem os espectadores. Seja você fã de dramas emocionantes, comédias hilárias, suspense arrepiante, ou qualquer outro gênero, temos uma seleção diversificada pronta para ser explorada.</p>
                
                    <p>Além disso, fornecemos informações detalhadas sobre cada série, incluindo sinopse, elenco, classificações e muito mais, para que você possa fazer escolhas informadas sobre o que assistir em seguida. Esperamos que esta página seja uma fonte valiosa para você descobrir novas e empolgantes séries de TV que se alinham com seus interesses e preferências.</p>
                
                    <p>Aproveite a jornada e prepare-se para mergulhar em um mundo de entretenimento inesquecível! Seja qual for o seu gênero favorito, estamos aqui para garantir que sua experiência seja memorável e enriquecedora.</p>
                
            </div>


           <?php

                if(isset($_POST['select'])){
                    $generos = $_POST['select'];
                    $nRank = $_POST['num'];

                    for($i = 1;$i <= $nRank;$i++){
                        $seletor = "SELECT * FROM $generos WHERE id = '$i'";
                        $sql_query = $mysqli -> query($seletor) or die("Falha na execução do código SQL". $mysqli->error);
                        $quantidade = $sql_query->num_rows;

                        if($quantidade == 1){

                            $usuario = $sql_query->fetch_assoc();
                            
                            $_SESSION['id'] = $usuario['id'];
                            $_SESSION['serie'] = $usuario['nome'];
                            $url = $usuario['url'];
                            $sinopse = $usuario['sinopse'];
                            //header("Location: generos.php");
                            ?>
                            <div class="drama" id="break" >

                                    <img src=<?php echo $url; ?> class="imagem-sinopse" alt="">
                                    <p ><?php echo $sinopse; ?></p>
                            </div>

                         <?php      
                        }else{
                    
                            $aviso = "Error ao acessar Banco de Dados";
                        }           

                    }


                } else{
                    echo"Selecione uma opção.";
                }

           
           ?>
           
           
            
            

            <form action="generos1.php" method="post">
                <select name="select">   
                    <option value="acao">Acão</option> 
                    <option value="drama">Drama</option>
                    <option value="comedia" >Comedia</option>
                    <option value="ficcao">Ficção</option>
                    <option value="documentario">Documentario</option>
                </select>
                <input type="number" name="num" id="" max="10" min="1" required>
                <input type="submit" value="Enviar">
            </form>

            
            
           

        
            

<p> <?php echo "Bem vindo ". $_SESSION['nome'] ; ?></p>
<p><?php echo"<a href='logout.php'>Sair</a>"?></p>


<?php /*
if(isset($_POST['select'])){
                $genero = $_POST['select'];
                
                switch($genero){                 
                case 1:
            
                echo"Escolheu bem";
                
                }
            }
            else{
                echo"Escolha o genero:";
                
            }

            */?>
            
    
</body>

</html>

