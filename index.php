<?php
include 'includes/Fonctions.php';
include 'includes/Variables.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <tr>
        <th>Nom</th>
        <th>PrixHT</th>
        <th>Prix</th>
        <th>Description</th>
    </tr>
    <?php
    /** @var array $beany */
        foreach ($beanies as $beany) {
            displayBeany($beany);
        }
    ?>
    </table>
</body>
</html>

