<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardando Enfeites</title>
</head>
<body>
<?php
$N = intval(trim(fgets(STDIN)));

$confianças = [];

for ($i = 0; $i < $N; $i++) {
    $confianças[] = array_map('intval', explode(' ', trim(fgets(STDIN))));
}

$ordem = range(1, $N);
$melhorOrdem = $ordem;
$maxConfiança = 0;

function permute($arr, $l, $r, &$melhorOrdem, &$maxConfiança, $confianças, $N) {
    if ($l == $r) {
        $confiançaTotal = 1;
        for ($i = 0; $i < $N; $i++) {
            $confiançaTotal *= $confianças[$i][$arr[$i] - 1];
        }

        if ($confiançaTotal > $maxConfiança) {
            $maxConfiança = $confiançaTotal;
            $melhorOrdem = $arr;
        }
    } else {
        for ($i = $l; $i <= $r; $i++) {
            [$arr[$l], $arr[$i]] = [$arr[$i], $arr[$l]];
            permute($arr, $l + 1, $r, $melhorOrdem, $maxConfiança, $confianças, $N);
            [$arr[$l], $arr[$i]] = [$arr[$i], $arr[$l]];
        }
    }
}

permute($ordem, 0, $N - 1, $melhorOrdem, $maxConfiança, $confianças, $N);

echo implode(' ', $melhorOrdem) . "\n";
?>
</body>
</html>