<?php
/**
 * @file        PageAnnouncesAdmin.php
 * @brief       This view is designed to display the announces admin
 * @author      Created by Monteiro.Rui
 * @version     10.06.2022
 */

$title = "Storex | Annonces Admin";
ob_start();
$rows = 0; // Column count
?>

<?php $AnnouncesResults = DisplayAnnounces(); ?>
    <div class="content">
        <div class="container">
            <h2 class="col-6 tm-text-primary">Annonces</h2>
            <div class="table-responsive tm-mb-90">
                <table class="table table-striped custom-table">
                    <thead>
                    <tr>
                        <th class="tm-text-gray-dark mb-3" scope="col">(A) ID</th>
                        <th class="tm-text-gray-dark mb-3" scope="col">(U) Informations</th>
                        <th class="tm-text-gray-dark mb-3" scope="col">(A) Nom</th>
                        <th class="tm-text-gray-dark mb-3" scope="col">(A) Prix</th>
                        <th class="tm-text-gray-dark mb-3" scope="col">(A) Image</th>
                        <th class="tm-text-gray-dark mb-3" scope="col"></th>
                        <th class="tm-text-gray-dark mb-3" scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($AnnouncesResults as $result) : ?>
                        <tr scope="row">
                            <td><?= $result['ID']; ?></td>
                            <td><?= $result['LastName']; ?> <?= $result['Firstname']; ?><br><?= $result['Email']; ?></td>
                            <td><?= $result['Name']; ?></td>
                            <td>CHF <?= $result['Price']; ?>.-</td>
                            <td><img class="imgcustum" src="<?= $result['Image']; ?>" alt="Image pas trouvée"/></td>
                            <td><a class="lien" href="index.php?action=ModifyAnnounce&ID=<?= $result['ID']; ?>">Modifier</a></td>
                            <td><a class="lien" href="index.php?action=DeleteAnnounce&ID=<?= $result['ID']; ?>">Effacer</a></td>
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