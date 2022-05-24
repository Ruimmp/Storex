<?php
/**
 * @file        FormArticleAdd.php
 * @brief       This view is designed to display the add article form
 * @author      Created by Monteiro.Rui
 * @version     14.04.2022
 */

$title = "Article Storex";
ob_start();
?>
    <form method="POST" action="upload.php" enctype="multipart/form-data">

        <div class="form-group">
            <label>Titre</label>
            <input type="text" name="articleTitre" id="articleTitre" required/>
        </div>
        <div class="form-group">
            <label>Prix</label>
            <input type="text" name="articlePrix" id="articlePrix" required/>
        </div>
        <div class="form-group">
            <label>Upload Image</label>
            <input type="file" name="image" accept="image/*" required/>
        </div>
        <div class="form-group form-button">
            <input type="submit" value="Upload" class="form-submit"/>
        </div>
    </form>
<?php
$content = ob_get_clean();
require 'gabarit.php';
?>