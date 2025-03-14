<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Esquecida</title>
</head>
<body>
<?php
$A = intval(trim(fgets(STDIN)));
$M = intval(trim(fgets(STDIN)));

$B = (2 * $M) - $A;

echo $B . "\n";
?>
</body>
</html>