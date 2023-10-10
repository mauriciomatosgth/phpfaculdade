<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Exercicio IF</title>
</head>
<body>
    <form action="exiIf.php" method="post">
        <label for="val">Valor</label>
        <input type="number" name="valor" id="val">
        <br>
        


        <label for=""><b>Você tem algum cupom?:</b></label>
        <br>


        <label for="">Cupom Quero10</label>
        <input type="radio" name="desconto" value="d">
        <br>

        <label for="">Comprei muito</label>
        <input type="radio" name="desconto" value="q">
<br>
        <input type="submit" value="enviar">
    </form>
    
</body>
</html>