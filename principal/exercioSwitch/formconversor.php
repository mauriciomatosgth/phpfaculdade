<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
</head>
<body>
    <form action="conversor.php" method="get">

        <label for="temp">Digite a Temperatura</label>        
        <input type="number" name="t" id="temp">
        <br>
        <label for=""><b>Conversores:</b>  </label>
        <br>
        <label for="cf">Celsius para Fahrenheit</label>
        <input type="radio" name="c" id="cf" value="ctf">
        <br>
        <label for="fc">Fahrenheit para Celsius</label>
        <input type="radio" name="c" id="fc" value="ftc">

        <br>
        <input type="submit" value="Enviar">

    </form>
    
</body>
</html>