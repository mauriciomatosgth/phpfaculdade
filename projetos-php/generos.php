<?php
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
            
            

            <form action="generos.php" method="post">
                <select name="select">                    
                    <option value="d">Drama</option>
                    <option value="c" >Comedia</option>
                    <option value="f">Ficção</option>
                </select>
                <input type="submit" value="Enviar">
            </form>

            
            <?php
            if(isset($_POST['select'])){
                $genero = $_POST['select'];
                
                switch($genero){
                    case 'd':?>
                        <div class="generos" >
                            <h3>Drama:</h3>

                            
                                <div class="drama" id="break" >
                                    <img src="imagem/breakbad-img-200p.jpeg" alt="">
                                    <p >Breaking Bad - Um professor de química com câncer se transforma em um produtor de metanfetamina para garantir o futuro financeiro de sua família. A série é conhecida por sua intensidade e desenvolvimento de personagens complexos.</p>
                                </div>
                                <div class="drama" >
                                    <img src="imagem/game-thrones1.jpeg" alt="">
                                    <p id="thrones">Game of Thrones - Baseada na série de livros "As Crônicas de Gelo e Fogo" de George R.R. Martin, esta série é um épico de fantasia que narra a luta pelo Trono de Ferro em Westeros.</p>
                                </div>
                                <div class="drama" >
                                    <img src="imagem/The-Crown1.jpg" alt="">
                                    <p id="crown">The Crown - Uma série dramática que segue a história da rainha Elizabeth II e os eventos históricos que moldaram o Reino Unido a partir de seu reinado.</p>
                                </div>
                            
                            
                        </div>
                   
                <?php
                    break;
                    case 'c':?>

                    <div class="generos" id="comedia">
                        <h3>Comédia:</h3>
                        <div class="drama">
                            <img src="imagem/friends-serie1.jpg" alt="">
                            <p id="friends">
                                Friends - Uma série clássica de comédia que segue um grupo de amigos vivendo em Nova York enquanto lidam com os altos e baixos da vida e dos relacionamentos.
                            </p>
                    </div>

                    <div class="drama">
                        <img src="imagem/office-serie1.jpeg" alt="">
                        <p id="office">
                            The Office (US) - Uma comédia estilo mockumentário que segue as vidas dos funcionários da Dunder Mifflin, uma empresa de papel, em Scranton, Pensilvânia.
                        </p>
                    </div>

                    <div class="drama">
                        <img src="imagem/park-serie1.jpg" alt="">
                        <p id="parks">
                            Parks and Recreation - Outra série estilo mockumentário, esta série segue a vida de Leslie Knope, uma dedicada funcionária pública em Pawnee, Indiana, enquanto ela trabalha em projetos municipais e interage com colegas excêntricos.
                        </p>
                    </div>


                <?php
                    break;
                    case 'f':?>
                        <div class="generos" id="ficcao">

                    <h3>Ficção Científica:</h3>

                    <div class="drama">
                        <img src="imagem/Stranger-Things1.png" alt="">
                        <p id="stranger">Stranger Things - Uma série que mistura elementos de ficção científica, terror e nostalgia dos anos 80. A trama envolve o desaparecimento de uma criança e segredos sinistros em uma pequena cidade.</p>
                    </div>
                    <div class="drama">
                        <img src="imagem/Black-Mirror1.png" alt="">
                        <p id="mirror">Black Mirror - Uma série antológica de ficção científica que explora os aspectos sombrios e perturbadores da tecnologia moderna e como ela pode afetar a sociedade e a humanidade.</p>
                    </div>
                    <div class="drama">
                        <img src="imagem/expanse-serie1.jpg" alt="">
                        <p id="expanse">The Expanse - Baseada na série de livros de James S.A. Corey, esta série se passa no futuro, onde a humanidade colonizou o sistema solar e lida com tensões políticas e ameaças alienígenas.</p>
                    </div>
                </div>
                <?php
                }
                
            
                echo"Escolheu bem";
                

            }else{
                echo"Escolha o genero:";
                
            }

            ?>

        
            <!--
            <div id="rank">
                
                <div class="generos" >
                    <h3>Drama:</h3>

                    
                        <div class="drama" id="break" >
                            <img src="imagem/breakbad-img-200p.jpeg" alt="">
                            <p >Breaking Bad - Um professor de química com câncer se transforma em um produtor de metanfetamina para garantir o futuro financeiro de sua família. A série é conhecida por sua intensidade e desenvolvimento de personagens complexos.</p>
                        </div>
                        <div class="drama" >
                            <img src="imagem/game-thrones1.jpeg" alt="">
                            <p id="thrones">Game of Thrones - Baseada na série de livros "As Crônicas de Gelo e Fogo" de George R.R. Martin, esta série é um épico de fantasia que narra a luta pelo Trono de Ferro em Westeros.</p>
                        </div>
                        <div class="drama" >
                            <img src="imagem/The-Crown1.jpg" alt="">
                            <p id="crown">The Crown - Uma série dramática que segue a história da rainha Elizabeth II e os eventos históricos que moldaram o Reino Unido a partir de seu reinado.</p>
                        </div>
                    
                    
                </div>

                <div class="generos" id="comedia">
                    <h3>Comédia:</h3>
                    <div class="drama">
                        <img src="imagem/friends-serie1.jpg" alt="">
                        <p id="friends">
                            Friends - Uma série clássica de comédia que segue um grupo de amigos vivendo em Nova York enquanto lidam com os altos e baixos da vida e dos relacionamentos.
                        </p>
                    </div>

                    <div class="drama">
                        <img src="imagem/office-serie1.jpeg" alt="">
                        <p id="office">
                            The Office (US) - Uma comédia estilo mockumentário que segue as vidas dos funcionários da Dunder Mifflin, uma empresa de papel, em Scranton, Pensilvânia.
                        </p>
                    </div>

                    <div class="drama">
                        <img src="imagem/park-serie1.jpg" alt="">
                        <p id="parks">
                            Parks and Recreation - Outra série estilo mockumentário, esta série segue a vida de Leslie Knope, uma dedicada funcionária pública em Pawnee, Indiana, enquanto ela trabalha em projetos municipais e interage com colegas excêntricos.
                        </p>
                    </div>
                </div>

                <div class="generos" id="ficcao">

                    <h3>Ficção Científica:</h3>

                    <div class="drama">
                        <img src="imagem/Stranger-Things1.png" alt="">
                        <p id="stranger">Stranger Things - Uma série que mistura elementos de ficção científica, terror e nostalgia dos anos 80. A trama envolve o desaparecimento de uma criança e segredos sinistros em uma pequena cidade.</p>
                    </div>
                    <div class="drama">
                        <img src="imagem/Black-Mirror1.png" alt="">
                        <p id="mirror">Black Mirror - Uma série antológica de ficção científica que explora os aspectos sombrios e perturbadores da tecnologia moderna e como ela pode afetar a sociedade e a humanidade.</p>
                    </div>
                    <div class="drama">
                        <img src="imagem/expanse-serie1.jpg" alt="">
                        <p id="expanse">The Expanse - Baseada na série de livros de James S.A. Corey, esta série se passa no futuro, onde a humanidade colonizou o sistema solar e lida com tensões políticas e ameaças alienígenas.</p>
                    </div>
                </div>

                

            </div>-->

<p> <?php echo "Bem vindo ". $_SESSION['nome'] ; ?></p>
<p><?php echo"<a href='logout.php'>Sair</a>"?></p>

    
</body>
</html>