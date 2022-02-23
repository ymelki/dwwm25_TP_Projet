<?php include "header.php" ?>
    Bienvenue sur la page d'accueil

    <?php if (isset($_COOKIE['favoris'])) echo $_COOKIE['favoris']; ?>
<?php include "footer.php" ?>