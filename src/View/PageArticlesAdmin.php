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

    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll"
         data-image-src="Assets/img/hero.jpg">
        <form class="d-flex tm-search-form">
            <input class="tm-search-input" type="search" placeholder="Cherchez ici" aria-label="Search">
            <button class="btn tm-search-btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>

<?php $articlesResults = displayArticles(); ?>
    <div class="content">

        <div class="container">
            <h2 class="mb-3">Annonces</h2>
            <div class="table-responsive">
                <table class="table table-striped custom-table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Description</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($articlesResults as $result) : ?>
                        <tr scope="row">
                            <td><?= $result['ID']; ?>
                            </td>
                            <td><?= $result['Name']; ?></td>
                            <td>CHF <?= $result['Price']; ?>.-</td> <!-- Prices are not float -->
                            <td><?= $result['Description']; ?></td>
                            <td><img <?= $result['Image']; ?>" style="height: 20px"></td>
                            <td><a href="index.php?action=deleteArticle&Name=<?= $result['Name']; ?>">Effacer</a></td>

                            <!--<td><a href="index.php?action=deleteSnow&code=<?= $result['code']; ?>"><i class="far fa-file-times"></i></a></td>
            <td><a href="index.php?action=editSnow&code=<?= $result['code']; ?>"><i class="far fa-edit"></i></a></td>-->
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