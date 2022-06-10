<?php
/**
 * @file        PageHome.php
 * @brief       This view is designed to display the home page
 * @author      Created by Monteiro.Rui
 * @version     12.04.2022
 */

$title = "Accueil Storex";
ob_start();
$rows = 0; // Column count
?>

<?php $articlesResults = displayAdminArticles(); ?>
    <div class="content">
        <div class="container">
            <h2 class="col-6 tm-text-primary">Annonces</h2>
            <div class="table-responsive">
                <table class="table table-striped custom-table">
                    <thead>
                    <tr>
                        <th class="tm-text-gray-dark mb-3" scope="col">ID (annonce)</th>
                        <th class="tm-text-gray-dark mb-3" scope="col">Information du vendeur</th>
                        <th class="tm-text-gray-dark mb-3" scope="col">Nom (annonce)</th>
                        <th class="tm-text-gray-dark mb-3" scope="col">Prix (annonce)</th>
                        <th class="tm-text-gray-dark mb-3" scope="col">Description (annonce)</th>
                        <th class="tm-text-gray-dark mb-3" scope="col">Image (annonce)</th>
                        <th class="tm-text-gray-dark mb-3" scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($articlesResults as $result) : ?>
                        <tr scope="row">
                            <td><?= $result['ID']; ?></td>
                            <td><?= $result['LastName']; ?> <?= $result['Firstname']; ?><br><?= $result['Email']; ?></td>
                            <td><?= $result['Name']; ?></td>
                            <td>CHF <?= $result['Price']; ?>.-</td> <!-- Prices are not float -->
                            <td><?= $result['Description']; ?></td>
<<<<<<< Updated upstream
                            <td><img <?= $result['Image']; ?></td>
=======
                            <td><?= $result['Image']; ?></td>
>>>>>>> Stashed changes
                            <td><a href="index.php?action=deleteArticle&Name=<?= $result['Name']; ?>">Effacer</a></td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php
$content = ob_get_clean();
require 'gabarit.php';
?>