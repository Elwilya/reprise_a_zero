<?php include 'includes/header.php';?>


<div style="display: flex; flex-direction: row; width: 100%; justify-content: space-around;">
<?php
$count = 0;
foreach ($beanies as $beany) {
    $count++;
    if ($count > 3) {
        break;
    }

    $name = $beany[PRODUCT_NAME];
    $name .= ' (';
    $name .= $beany['price'];
    $name .= ' €)'; ?>


<div class="card" style="width: 18rem;">
    <img src="https://via.placeholder.com/150" class="card-img-top" alt="">
    <div class="card-body">
        <h5 class="card-title"><?= $name; ?></h5>
        <p class="card-text"><?= $beany['description']; ?></p>
    </div>
</div>
<?php
} ?>
</div>
<a href="list.php" class="btn btn-primary">
Voir tous les produits
</a>

 <?php include 'includes/footer.php';?>
