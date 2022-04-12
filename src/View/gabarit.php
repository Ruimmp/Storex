<?php
/**
 * @file      gabarit.php
 * @brief     This view is designed to centralize all common graphical component like header and footer (will be call by all views)
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY & Pascal BENZONANA
 * @version   03-MAY-2020
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog-Z Bootstrap 5.0 HTML Template</title>
    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="Assets/css/templatemo-style.css">
    <!--

    TemplateMo 556 Catalog-Z

    https://templatemo.com/tm-556-catalog-z

    -->
</head>
<body>
<!-- Page Loader
<div id="loader-wrapper">
    <div id="loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

</div>-->

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="Assets/img/logo-nobg.png" alt="HTML5 Icon" style="width:60px;height:60px;">
            Anubis
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <?php if (!isset($_SESSION['userEmailAddress']) ||
                    (!isset($_GET['action'])) ||
                    ((@$_GET['action'] == "logout"))) : ?>
                    <li class="nav-item">
                        <a class="nav-link nav-link-home active" aria-current="page" href="index.php?action=home">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-articles" href="index.php?action=displayArticles">Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-login" href="index.php?action=login">Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-register" href="index.php?action=register">S'enregistrer</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link nav-link-default" href="index.php?action=profile">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-logout" href="index.php?action=logout">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-default" href="index.php?action=myArticles">Mes articles</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<!--
<div class="row tm-brand-row">
    <div class="col-lg-4 col-10">
        <div class="tm-brand-container">
            <div class="tm-brand-texts">
                <h1 class="text-uppercase tm-brand-name">Anubis</h1>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-2 tm-nav-col">
        <div class="tm-nav">
            <nav class="navbar navbar-expand-lg navbar-light tm-navbar">
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto mr-0">

                        <li class="nav-item active">
                            <div class="tm-nav-link-highlight"></div>
                            <a class="nav-link" href="index.php?action=home">Home</a>
                        </li>

                        <?php if (!isset($_SESSION['userEmailAddress']) || (!isset($_GET['action'])) || ((@$_GET['action'] == "logout"))) : ?>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="index.php?action=login">Login</a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="index.php?action=register">Register</a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="index.php?action=contact">Contacter</a>
                            </li>
                        <?php else : ?>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="index.php?action=profile">Profile</a>
                            </li>
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="index.php?action=logout">Logout</a>
                            </li>
                        <?php endif; ?>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>-->

<?= $content; ?>

<!--
<div>
    <div class="footer-clean">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Anubis.com</h3>
                        <ul>
                            <li><a href="#">Rechercher</a></li>
                            <li><a href="#">Faire une annonce</a></li>
                            <li><a href="#">Vos annonces</a></li>
                            <li><a href="#">Catégories</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>À propos</h3>
                        <ul>
                            <li><a href="#">Contacter</a></li>
                            <li><a href="#">Règles d'utilisation </a></li>
                            <li><a href="#">Protection des données</a></li>
                            <li><a href="#">Conditions générales</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Partenaires</h3>
                        <ul>
                            <li><a href="#">CPNV - STE-CROIX</a></li>
                            <li><a href="#">MasterCard</a></li>
                            <li><a href="#">Tamedia Group</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a
                            href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i
                                class="icon ion-social-snapchat"></i></a><a href="#"><i
                                class="icon ion-social-instagram"></i></a>
                        <p class="copyright">Anubis 2022 © All rights reserved</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
-->

<script src="Assets/js/jquery.min.js"></script>
<script src="Assets/js/parallax.min.js"></script>
<script src="Assets/js/bootstrap.min.js"></script>
</body>
</html>