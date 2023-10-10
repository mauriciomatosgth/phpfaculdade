<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio For</title>
</head>
<body>
    <p>Escolha um numero, para realizar a soma de todos numero par ou impar ate a sua escolha</p>
    <form action="for.php" method="get">
        <label for="num">Digite um numero</label> 
        <input type="number" name="n" id="num" max=1000>
        <br>
        <label for="par">Par</label>
        <input type="radio" name="e" id="par" value ="p">
        <br>
        <label for="impar">Impar</label>
        <input type="radio" name="e" id="impar" value="i">

        <br>
        <input type="submit" value="Enviar">




    </form>
    
</body>
</html>