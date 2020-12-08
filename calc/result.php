<?php 

$result = require __DIR__ . '/calc.php';

?>

<html>
    <head>
        <title>Калькулятор</title>
    </head>
    <body>
    <?= $result ?>
    </body>
</html>