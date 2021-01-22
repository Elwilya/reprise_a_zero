<?php include 'includes/header.php'; ?>

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

<?php include 'includes/footer.php'?>
