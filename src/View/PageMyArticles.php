<?php
/**
 * @file        PageMyArticles.php
 * @brief       This view is designed to display the user articles
 * @author      Created by Monteiro.Rui
 * @version     14.04.2022
 */

$title = "My Articles Storex";
ob_start();
?>

<?php
$content = ob_get_clean();
require 'gabarit.php';
?>