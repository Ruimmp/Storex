<?php
/**
 * @file        PageAnnouncesDetails.php
 * @brief       This view is designed to display the announcement details
 * @author      Created by Pereira.Nuno
 * @version     16.06.2022
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
                        <a href="index.php?action=FormContact&ID=<?= $result['ID']; ?>"
                           class="form-submit btn btn-primary tm-btn-big">Contacter l'annonceur
                        </a>
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

<?php
$content = ob_get_clean();
require 'gabarit.php';
?>