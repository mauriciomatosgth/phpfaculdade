<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio While</title>
</head>
<body>
    <h1>Simulador Populacional de Bactérias.</h1>
    <h3>Digite os numeros:</h3>

    <form action="while.php" method="post">
        <label for="inic"><b> População inicial:</b></label>
        <input type="number" name="inicial" id="inic">
        <br>
        <label for="c"><b> Taxa de Crescimento:</b></label>
        <input type="number" name="cresci" id="c" step="0.01" max ="1">
        <br>
        <label for="s"><b> Gerações a ser Simuladas</b></label>
        <input type="number" name="simu" id="s">
        <br>

        <input type="submit" value="Enviar">



    </form>
    
</body>
</html>