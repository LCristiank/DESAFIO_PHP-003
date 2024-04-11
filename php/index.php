<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<?php 
    $moneyReceive = $_GET["dinheiro"];
    $dollar = 5.25;
    $moneyConvert = number_format( (float) $moneyReceive / $dollar, 2, '.', '');
    echo <<< CONVERT
        <div class="cont-response">
            <h1>Convertedor de Reais para Dolares </h1>
            <p>Seus R$$moneyReceive equivalem a $$moneyConvert</p>
            <h6> *Cotação fixa de R$$dollar informada diretamente no código</h6>

            <a href="javascript:history.go(-1)"> Volte aqui!</a>
        </div>

    CONVERT;


?>
    
</body>
</html>