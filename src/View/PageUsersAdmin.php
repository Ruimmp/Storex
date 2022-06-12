<?php
/**
 * @file        PageUsersAdmin.php
 * @brief       This view is designed to display the home page
 * @author      Created by Monteiro.Rui
 * @version     11.06.2022
 */

$title = "Storex | Users Admin";
ob_start();
$rows = 0; // Column count
?>

<?php $usersResults = displayAdminUsers(); ?>
    <div class="content">
        <div class="container">
            <h2 class="col-6 tm-text-primary">Utilisateurs</h2>
            <div class="table-responsive tm-mb-90">
                <table class="table table-striped custom-table">
                    <thead>
                    <tr>
                        <th class="tm-text-gray-dark mb-3" scope="col">ID</th>
                        <th class="tm-text-gray-dark mb-3" scope="col">Nom de famille</th>
                        <th class="tm-text-gray-dark mb-3" scope="col">Prénom</th>
                        <th class="tm-text-gray-dark mb-3" scope="col">E-mail</th>
                        <th class="tm-text-gray-dark mb-3" scope="col"></th>
                        <th class="tm-text-gray-dark mb-3" scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($usersResults as $result) : ?>
                        <tr scope="row">
                            <td><?= $result['ID']; ?></td>
                            <td><?= $result['LastName']; ?></td>
                            <td><?= $result['FirstName']; ?></td>
                            <td><?= $result['Email']; ?></td>
                            <td><a href="index.php?action=deleteArticle&ID=<?= $result['ID']; ?>">Modifier</a></td>
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