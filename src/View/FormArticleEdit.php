<?php
/**
 * @file        FormArticleEdit.php
 * @brief       This view is designed to display the edit article form
 * @author      Created by Monteiro.Rui
 * @version     14.04.2022
 */

$title = "Article Storex";
ob_start();
?>

<?php
$content = ob_get_clean();
require 'gabarit.php';
?>