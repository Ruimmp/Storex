<?php
/**
 * @file      gabarit.php
 * @brief     This view is designed to centralize all common graphical component like header and footer (will be call by all views)
 * @author    Created by Monteiro.Rui
 * @version   12.04.2022
 */

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title; ?></title>

    <link rel="icon" href="Assets/img/logonobg1.png">

    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="Assets/css/main.css">
    <link rel="stylesheet" href="Assets/styles/footer.css">
    <link rel="stylesheet" href="Assets/styles/addfile.css">
    <link rel="stylesheet" href="Assets/styles/FormsRegister_Login.css">
    <link rel="stylesheet" href="Assets/styles/PageHome.css">
    <link rel="stylesheet" href="Assets/material-icon/css/material-design-iconic-font.min.css">
</head>
<body>
<!-- Page Loader -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- Page Loader End -->

<!-- Header -->
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php?action=home">
            <img src="Assets/img/logonobg1.png" alt="HTML5 Icon" style="width:40%;">
            Storex
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">


                <?php if (!isset($_SESSION['UserEmail']) ||
                    (!isset($_GET['action'])) ||
                    ((@$_GET['action'] == "logout"))) : ?>
                    <li class="nav-item">
                        <a class="nav-link nav-link-default" aria-current="page"
                           href="index.php?action=home">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-blue" href="index.php?action=login">Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-blue" href="index.php?action=register">S'enregistrer</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link nav-link-default" aria-current="page"
                           href="index.php?action=home">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-green" href="index.php?action=addArticle">Créer une annonce</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-default" href="index.php?action=displayMyArticles">Mes annonces</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-default" href="index.php?action=profile">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-red" href="index.php?action=logout">Logout</a>
                    </li>
                <?php endif; ?>

                <?php if (isset($_SESSION['usertype_ID']) && (@$_SESSION['usertype_ID'] == '3')) : ?>
                    <li class="nav-item">
                        <a class="nav-link nav-link-black" href="index.php?action=AdminPanel">Admin</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<!-- Header END -->

<?= $content; ?>

<!-- Footer -->
<div class="ft_1">
    <div class="row py-4">
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <img src="Assets/img/logonobg.png" alt="" width="230" class="mb-3" style="height:100%">
        </div>
        <!--
        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
            <h6 class="text-uppercase font-weight-bold mb-4">Categories</h6>
            <ul class="list-unstyled mb-0">
                <li class="mb-2"><a href="index.php?action=WomenCategory" class="text-muted">Femme</a></li>
                <li class="mb-2"><a href="index.php?action=ManCategory" class="text-muted">Homes</a></li>
                <li class="mb-2"><a href="index.php?action=KidsCategory" class="text-muted">Enfants</a></li>
                <li class="mb-2"><a href="index.php?action=AccessoriesCategory" class="text-muted">Accessoires</a>
                </li>
            </ul>
        </div>
        -->
        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
            <h6 class="text-uppercase font-weight-bold mb-4">Pages</h6>
            <ul class="list-unstyled mb-0">
                <?php if (!isset($_SESSION['UserEmail']) ||
                    (!isset($_GET['action'])) ||
                    ((@$_GET['action'] == "logout"))) : ?>
                    <li class="nav-item">
                    <li class="mb-2"><a href="index.php?action=home" class="text-muted">Accueil</a></li>
                    <li class="nav-item">
                    <li class="mb-2"><a href="index.php?action=login" class="text-muted">Connexion</a></li>
                    <li class="nav-item">
                    <li class="mb-2"><a href="index.php?action=register" class="text-muted">S'enregistrer</a></li>
                <?php else : ?>
                    <li class="nav-item">
                    <li class="mb-2"><a href="index.php?action=home" class="text-muted">Accueil</a></li>
                    <li class="nav-item">
                    <li class="mb-2"><a href="index.php?action=profile" class="text-muted">Profile</a></li>
                    <li class="nav-item">
                    <li class="mb-2"><a href="index.php?action=myArticles" class="text-muted">Mes articles</a></li>
                    <li class="nav-item">
                    <li class="mb-2"><a href="index.php?action=logout" class="text-muted">Logout</a></li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="col-lg-4 col-md-6 mb-lg-0">
            <h6 class="text-uppercase font-weight-bold mb-4">Newsletter</h6>
            <p class="text-muted mb-4">
                Inscrivez-vous à notre newsletter pour être informé aux soldes de nos produits!
            </p>
            <div class="rounded">
                <div class="input-group">
                    <input
                            type="email"
                            placeholder="Entrez votre mail"
                            aria-describedby="button-addon1"
                            class="form-control border-0 shadow-0">
                    <div class="input-group-append">
                        <button
                                id="button-addon1"
                                type="submit"
                                class="btn">
                            <i class="fa fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Copyrights -->
<div class="bg-white py-2">
    <div class="ft_1 text-center">
        <p class="text-muted mb-0 py-2">Storex 2022 © Tous les droits réservés</p>
    </div>
</div>
<!-- End -->

<script src="Assets/js/plugins.js"></script>

<script>
    $(window).on("load", function () {
        $('body').addClass('loaded');
    });
</script>

</body>
</html>