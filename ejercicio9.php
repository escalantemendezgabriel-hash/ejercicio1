<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <h1> "Ejercicio 9 "</h1>
    <?php
   //ejercicio 9
$litrosPorGalon = 3.785;
$PrecioPorLitro = 4.50;

$galones_surtidos = 7; 

$totalLitros = $galones_surtidos * $litrosPorGalon;
$totalACobrar = $totalLitros * $PrecioPorLitro ;

echo "el cliente debe pagar: ". $totalACobrar ;

?>
</body>
</html>
