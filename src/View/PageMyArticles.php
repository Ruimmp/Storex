<?php
/**
 * @file        PageMyArticles.php
 * @brief       This view is designed to display the home page
 * @author      Created by Monteiro.Rui
 * @version     10.06.2022
 */

$title = "Storex | Mes annonces";
ob_start();
$rows = 0; // Column count
?>

<?php $articlesResults = displayAdminArticles(); ?>
    <div class="content">
        <div class="container">
            <h2 class="col-6 tm-text-primary">Annonces</h2>
            <div class="table-responsive tm-mb-90">
                <table class="table table-striped custom-table">
                    <thead>
                    <tr>
                        <th class="tm-text-gray-dark mb-3" scope="col">ID</th>
                        <th class="tm-text-gray-dark mb-3" scope="col">Nom</th>
                        <th class="tm-text-gray-dark mb-3" scope="col">Prix</th>
                        <th class="tm-text-gray-dark mb-3" scope="col">Description</th>
                        <th class="tm-text-gray-dark mb-3" scope="col">Image</th>
                        <th class="tm-text-gray-dark mb-3" scope="col"></th>
                        <th class="tm-text-gray-dark mb-3" scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($articlesResults as $result) : ?>
                        <tr scope="row">
                            <td><?= $result['ID']; ?></td>
                            <td><?= $result['Name']; ?></td>
                            <td>CHF <?= $result['Price']; ?>.-</td> <!-- Prices are not float -->
                            <td><?= $result['Description']; ?></td>
                            <td><img class="imgcustum" src="<?= $result['Image']; ?>" alt="Image pas trouvée"/></td>
                            <td><a href="index.php?action=modifyArticle&ID=<?= $result['ID']; ?>">Modifier</a></td>
                            <td><a href="index.php?action=deleteArticle&ID=<?= $result['ID']; ?>">Effacer</a></td>
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