<?php
/**
 * @file        PageManArticles.php
 * @brief       This view is designed to display the Lost page
 * @author      Created by Monteiro.Rui
 * @version     26.04.2022
 */

$title = "Hommes Storex";
ob_start();
?>;

<?php
$content = ob_get_clean();
require 'gabarit.php';
?>