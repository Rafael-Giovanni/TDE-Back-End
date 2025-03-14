<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teleférico</title>
</head>
<body>
    <?php
       $C = intval(fgets(STDIN));
       $A = intval(fgets(STDIN));

       $viagens = ceil($A / ($C - 1));

       echo $viagens . PHP_EOL;
    ?>
</body>
</html>