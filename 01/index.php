<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AoC dia 1</title>
</head>
<body>
<?php
    $fp = fopen("input.txt", "r");
    while (!feof($fp)) {
        $linea = fgets($fp);

        if ($linea > $i){
            $cont += 1;
        }

        $i = $linea;
    }
    fclose($fp);
    echo $cont-1;
    ?>
</body>
</html>