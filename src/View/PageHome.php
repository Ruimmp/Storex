<?php
/**
 * @file        PageHome.php
 * @brief       This view is designed to display the home page
 * @author      Created by Monteiro.Rui
 * @version     12.04.2022
 */

$title = "Storex | Accueil";
ob_start();
$rows = 0; // Column count
?>

    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll"
         data-image-src="Assets/img/banner_search.png">
        <form class="d-flex tm-search-form">
            <input class="tm-search-input" type="search" placeholder="Cherchez ici" aria-label="Search">
            <button class="btn tm-search-btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>

<?php $articlesResults = displayArticles(); ?>
    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row tm-gallery">
            <?php foreach ($articlesResults as $result) : ?>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 tm-mb-60">
                    <div class="card h-90">
                        <img class="card-img-top imgedit" src="<?= $result['Image']; ?>" alt="<?= $result['Name']; ?>"/>
                        <!-- Product details-->
                        <div class="p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h4><?= $result['Name']; ?></h4>
                                <!-- Product price-->
                                Prix: <?= $result['Price']; ?> CHF
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="form-group1 form-button btn-dtl">
                            <a href="index.php?action=PageArticleDetails&ID=<?= $result['ID']; ?>">
                                <input type="submit" class="form-submit" value="Voir les détails"/>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
<?php
$content = ob_get_clean();
require 'gabarit.php';
?>