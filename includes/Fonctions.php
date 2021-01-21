<?php
/**
* Reçoit un prix TTC et renvoie un prix HT
*
* @param float $prixTTC
*
* @return float;
*/
    function calculTVA(float $prixTTC): float
    {
        return $prixTTC / 1.2;
    }


    function displayBeany($data = [])
    {
        $prixHT = calculTVA($data['price']); ?>
            <tr>
                <td>
                    <?php
                        echo $data[PRODUCT_NAME]; ?>
                </td>
                <td style="color: <?php
                    if ($prixHT <= 12) {
                        echo 'green';
                    } else {
                        echo 'blue';
                    } ?>;">
                    <?php echo number_format($prixHT, 2, ',', ' '); ?> €
                </td>

                <td style="color: <?php
                    if ($data["price"] <= 12) {
                        echo 'green';
                    } else {
                        echo 'blue';
                    } ?>;">
                    <?php
                        echo number_format($data["price"], 2, ',', ' '); ?> €
                </td>
                <td>
                    <?php
                        echo $data["description"]; ?>
                </td>
            </tr>
            <?php
    }
?>