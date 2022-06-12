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

<?php
$content = ob_get_clean();
require 'gabarit.php';
?>