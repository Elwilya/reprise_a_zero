<?php

session_start();
session_destroy();

include "includes/header.php";
?>

<div class="alert alert-success" role="alert">
Vous êtes bien déconnecté.e
</div>

<?php
include "includes/footer.php";
