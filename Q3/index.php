<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altura Mínima</title>
</head>
<body>
<?php
list($N, $H) = array_map('intval', explode(' ', trim(fgets(STDIN))));

$alturas = array_map('intval', explode(' ', trim(fgets(STDIN))));

$contador = 0;

foreach ($alturas as $altura) {
    if ($H >= $altura) {
        $contador++;
    }
}

echo $contador . "\n";
?>
</body>
</html>