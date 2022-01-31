<?php

require_once __DIR__ . "/classes/Prodotti.php";
require_once __DIR__ . "/classes/Utenti.php";
require_once __DIR__ . "/classes/Premium.php";


$prodotti = new Prodotti("AMD Athlon 3000G", "AMD Radeon Vega 3", 500, 8, [50, 60]);


$Andrea = new Premium ("Andrea", "Mingolla", 30);
$Andrea->setEmail("andrea.mingolla@yahoo.it");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
</head>
<body>
    
    <h1>Acquisti clienti:</h1>

    <h2><?php echo "{$Andrea->nome} {$Andrea->cognome}"; ?></h2>
    <ul>
        <li><?php echo $prodotti->CPU; ?></li>
        <li><?php echo $prodotti->GPU; ?></li>
        <li><?php echo $prodotti->SSD; ?> Gb</li>
        <li><?php echo $prodotti->RAM; ?> Gb</li>
        <?php foreach($prodotti->dimensioni as $dimensione) {?>
            <li><?php echo $dimensione; ?> cm</li>
        <?php } ?>
    </ul>


</body>
</html>