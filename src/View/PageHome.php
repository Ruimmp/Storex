<?php
/**
 * @file        PageHome.php
 * @brief       This view is designed to display the home page
 * @author      Created by Monteiro.Rui
 * @version     12.04.2022
 */

$title = "Accueil Storex";
ob_start();
$rows=0; // Column count
?>

    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll"
         data-image-src="Assets/img/hero.jpg">
        <form class="d-flex tm-search-form">
            <input class="tm-search-input" type="search" placeholder="Cherchez ici" aria-label="Search">
            <button class="btn tm-search-btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>

<?php $articlesResults = displayArticles();
foreach ($articlesResults as $result ) : ?>
    <?php $rows++; ?>
    <?php if ($rows%4) : // tests to have 4 items / line ?>
    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row tm-gallery">
        <?php $rows=0;?>
    <?php endif ?>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <figure class="effect-ming tm-video-item">
                    <img src="<?= $result['Image']; ?>" alt="<?= $result['Name']; ?>" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <a href="./View/PageWomenArticles.php">View more</a>
                        <h2><?= $result['Name']; ?></h2>
                        <h3><?= $result['Price']; ?></h3>
                </figure>
            </div>
            <?php if ($rows%4) :?>
    </div>
    <?php endif ?>
<?php endforeach ?>
<?php
$content = ob_get_clean();
require 'gabarit.php';
?>