<?php
/**
 * @file        ArticleDetails.php
 * @brief       This view is designed to display the edit article form
 * @author      Created by Monteiro.Rui
 * @version     12.06.2022
 */

$title = "Storex | Détails d'annonce";
ob_start();
?>

<?php foreach ($announcesResults as $result) : ?>

    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-12 tm-text-primary"><?= $result['Name']; ?></h2>
        </div>

        <div class="row tm-mb-90">
            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
                <img src="<?= $result['Image']; ?>" alt="Image" class="img-fluid">
            </div>

            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div class="tm-bg-gray tm-video-details">
                    <h3 class="tm-text-gray-dark mb-3">Description</h3>
                    <p class="mb-5 tm-video-details-txt">
                        <?= $result['Description']; ?>
                    </p>
                    <div class="text-center mb-4 btn-dtl">
                        <a href="mailto:<?= $result['Email']; ?>" class="form-submit">Contacter
                            l'annonceur</a>
                    </div>

                    <div class="mb-4 d-flex flex-wrap justify-content-center text-xxl-center">
                        <div>
                            <h4>
                                <span class="tm-text-gray-dark">Prix: </span>
                                <span class="tm-text-primary"><?= $result['Price']; ?></span>
                                <span class="tm-text-gray-dark">CHF</span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endforeach ?>

    <!--
<?php $articlesResults = displayAdminArticles(); ?>
<?php foreach ($announcesResults as $result) : ?>
    <?php if (isset($_SESSION['Email']) == $result['Email']) : ?>

        <div class="row mb-4 container">
            <h2 class="col-12 tm-text-primary text-xxl-center">
                <span class="tm-text-gray-dark">Autres annonces par: </span>
                <a href="mailto:<?= $result['Email']; ?>" class="lien">
                    <span><?= $result['Firstname']; ?></span>
                </a>
            </h2>
        </div>
        <div class="row mb-3 tm-gallery container">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <div class="h-90 tm-mt-10">
                    <img class="card-img-top imgedit-dtl" src="<?= $result['Image']; ?>" alt="<?= $result['Name']; ?>"/>
                    <div class="p-4">
                        <div class="text-center">
                            <h4><?= $result['Name']; ?></h4>
                            Prix: <?= $result['Price']; ?> CHF
                        </div>
                    </div>
                    <div class="form-group1 form-button btn-dtl">
                        <a href="index.php?action=PageArticleDetails&ID=<?= $result['ID']; ?>">
                            <input type="submit" class="form-submit" value="Voir les détails"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

<?php endforeach ?>
-->

<?php
$content = ob_get_clean();
require 'gabarit.php';
?>